<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class loginCtrl {
    
    //wyświetlenie widoku strony logowania
    public function action_logowanie() {
        App::getSmarty()->assign("error","");
	    App::getSmarty()->display("logowanie.tpl");
    }

    //obsługa logowania po wypełnieniu formularza
    public function zaloguj() {
        //zapytanie do bazy czy istnieje taki użytkownik
        $user = App::getDB()->query("SELECT u.user_id, u.login, u.password, r.role_id, r.role_name 
        FROM users u JOIN roles r ON u.role_id = r.role_id 
        WHERE u.login = '".$_POST['login']."' and u.password = '".$_POST['pass']."';")->fetchAll();

        //logika logowania
        if(count($user) == 1) {
            \core\RoleUtils::addRole('loggedIn');
            $_SESSION['user_id'] = $user[0]['user_id']; //ustalenie sesji
            if ($user[0]['role_id'] == 1) {
                \core\RoleUtils::addRole('isAdmin');
                $_SESSION['is_admin'] = true;
            } else {
                $_SESSION['is_admin'] = false;
            }
            header('Location: '.App::getConf()->app_root);
        } else {
            //błąd logowania
            App::getSmarty()->assign("error","Błędne dane logowanie");
            App::getSmarty()->display("logowanie.tpl");
        }
    }

    //obsługa wylogowania
    public function wyloguj() {
        session_destroy();
        header('Location: '.App::getConf()->app_root);
    }
    
}
