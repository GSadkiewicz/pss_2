<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class onasCtrl {
    
    //obsługa wyświetlania strony o nas
    public function action_onas() {
        $content = App::getDB()->query("SELECT content FROM sub_page WHERE sub_page_id = 2")->fetchAll();
        
        App::getSmarty()->assign("content", $content[0]['content']);
        App::getSmarty()->display("onas.tpl");
    }

    //obsługa edycji zawartości strony o nas
    public function Edycja() {
        if ($_SESSION['is_admin'] != true) {
            return header('Location: '.App::getConf()->app_root);
        }

        var_dump($_POST);
        App::getDB()->query("UPDATE sub_page SET content = '".$_POST['content']."' WHERE sub_page_id = 2;");

        
        header('Location: '.App::getConf()->app_root."/onas");
    }
}
