<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class KategorieCtrl {
    
    //zarządzanie listą kategorii
    public function action_Kategorie() {
        $categories = App::getDB()->query("SELECT t.type_name, t.type_id FROM types t")->fetchAll();

        App::getSmarty()->assign("items",$categories);
        App::getSmarty()->display("Kategorie.tpl");
    }
}
