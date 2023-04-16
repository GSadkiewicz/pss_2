<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RezerwacjaCtrl {
    
    //obsługa wyświetlania formularza rezerwacji
    public function action_Rezerwacja() {
        if (!isset($_SESSION['user_id'])) {
            return header('Location: '.App::getConf()->app_root.'/logowanie');
        }

        if (isset($_GET['item'])) {
            $item = App::getDB()->query("SELECT i.Item_id, i.Price, i.Name, t.type_name FROM Item i 
            JOIN types t ON i.type_id = t.type_id
            WHERE i.Item_id = ".$_GET['item'].";")->fetchAll();


            App::getSmarty()->assign("item",$item[0]);
            App::getSmarty()->display("Rezerwacja.tpl");
        } else {
            header('Location: '.App::getConf()->app_root);
        }  
    }

    //obsługa akcji rezerwacji z formularza
    public function Rezerwuj() {
        if (!isset($_SESSION['user_id'])) {
            return header('Location: '.App::getConf()->app_root.'/logowanie');
        }


        App::getDB()->insert("reservation",[
            "Item_id" => $_POST['Item_id'],
            "total_price" => $_POST['Item_price'],
            "data_odbioru" => $_POST['collectDate'],
            "data_zwrotu" => $_POST['returnDate'],
            "imie" => $_POST['name'],
            "nazwisko" => $_POST['name'],
            "numer_telefonu" => $_POST['phone'],
            "user_id" => $_SESSION['user_id']
        ]);

        $res_id = App::getDB()->id();
        header('Location: '.App::getConf()->app_root.'/rezerwacja/typ/'.$res_id);
    }
    
    //obsługa strony potwierdzenia złożenia zamówienia (TYP)
    public function TYP() {
        if (!isset($_SESSION['user_id'])) {
            App::getSmarty()->assign("error",[
                "code" => "404",
                "message" => "Nie znaleziono rezerwacji"
            ]);
            App::getSmarty()->display("blad.tpl");
            return;
        }

        $id = intval(explode('/', $_SERVER['REQUEST_URI'])[5]);

        $res = App::getDB()->query("select r.reservation_id, r.total_price, r.data_odbioru, r.data_zwrotu, r.imie, r.nazwisko, r.numer_telefonu, r.user_id, i.Item_id, i.Name as 'Item_name', t.type_name 
        from reservation r 
        join item i on r.Item_id = i.Item_id 
        join types t on i.type_id = t.type_id
        where r.reservation_id = ".$id)->fetchAll();
        $notFound = false;

        if (empty($res)) {
            $notFound = true;
        } else {
            if ($res[0]['user_id'] != $_SESSION['user_id']) $notFound = true;
        }
        
        if ($notFound) {
            App::getSmarty()->assign("error",[
                "code" => "404",
                "message" => "Nie znaleziono rezerwacji"
            ]);
            App::getSmarty()->display("blad.tpl");
            return;
        }
        
        $res = $res[0];

        $datediff = strtotime($res['data_zwrotu']) - strtotime($res['data_odbioru']);
        $datediff = round($datediff / (60 * 60 * 24));
        App::getSmarty()->assign("res",$res);
        App::getSmarty()->assign("days",$datediff);

        App::getSmarty()->display("TYP.tpl");
    }
}
