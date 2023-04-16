<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class mojeRezerwacjeCtrl {
    
    //obsługa wyświetlania listy rezerwacji użytkownika
    public function action_rezerwacje() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: '.App::getConf()->app_root."/logowanie");
            return;
        }


        $res = App::getDB()->query("SELECT r.reservation_id, r.Item_id, r.data_odbioru, r.data_zwrotu, r.imie, r.nazwisko, r.numer_telefonu, r.user_id,
        i.Name as 'Item_name', t.type_id, t.type_name
        FROM reservation r
        JOIN item i ON r.item_id = i.item_id
        JOIN types t ON i.type_id = t.type_id
        WHERE r.user_id = ".$_SESSION['user_id'].";")->fetchAll();

        App::getSmarty()->assign("res",$res);
        App::getSmarty()->display("Rezerwacje.tpl");
    }
}
