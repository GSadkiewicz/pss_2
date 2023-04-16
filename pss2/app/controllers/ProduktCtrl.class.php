<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class ProduktCtrl {


    //obsługa wyświetlania karty produktu
    public function action_Produkt() {
        $id = explode('/', $_SERVER['REQUEST_URI'])[4];
        $item = App::getDB()->query("SELECT i.Item_id, i.Price, i.Name, t.type_name FROM Item i 
        JOIN types t ON i.type_id = t.type_id
        WHERE i.Item_id = ".$id.";")->fetchAll();

        if (empty($item)) {
            App::getSmarty()->assign("error",[
                "code" => "404",
                "message" => "Nie znaleziono produktu ".$id
            ]);
            App::getSmarty()->display("blad.tpl");
        } else {
            App::getSmarty()->assign("item",$item[0]);
            App::getSmarty()->display("Produkt.tpl");
        } 
    }
}
