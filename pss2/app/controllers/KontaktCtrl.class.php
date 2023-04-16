<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class KontaktCtrl {
    
    //obsługa wyświetlania strony kontaktu
    public function action_Kontakt() {

        $content = App::getDB()->query("SELECT  content FROM sub_page WHERE sub_page_id = 1")->fetchAll();
        
        App::getSmarty()->assign("content", $content[0]['content']);
        App::getSmarty()->display("Kontakt.tpl");
    }

    //obsługa edycji zawartości strony kontakt
    public function Edycja() {
        if ($_SESSION['is_admin'] != true) {
            return header('Location: '.App::getConf()->app_root);
        }

        App::getDB()->query("UPDATE sub_page SET content = '".$_POST['content']."' WHERE sub_page_id = 1;");
        
        header('Location: '.App::getConf()->app_root."/kontakt");
    }
}
