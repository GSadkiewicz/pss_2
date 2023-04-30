<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class ListaCtrl {
    
    //obsługa wyświetlania listy produktów w danej kategorii
    public function action_produkty_lista() {
        
        //sprawdzenie czy została wybrana jakaś strona
        if (isset($_GET['strona']) && $_GET['strona'] != "") {
            $strona = intval($_GET['strona']);
        }else{
            $strona = 1;
        }

        //ID kategorii z URL
        //$id = explode("?", explode('/', $_SERVER['REQUEST_URI'])[4])[0];
        $id = $_GET["id"];

        //obliczanie potrzebnych zmiennych
        $wyniki_na_strone = 3;
        $offset = ($strona-1) * $wyniki_na_strone;
        $poprzednia_strona = $strona - 1;
        $nastepna_strona = $strona + 1;
        $count_query = "SELECT COUNT(*) As total_records FROM item i JOIN types t ON i.type_id = t.type_id WHERE t.type_id = ".$id.";";
        
        //obliczanie ilości wyników i stron
        $result_count = App::getDB()->query($count_query)->fetchAll();
        $total_records = $result_count[0][0];
        $liczba_stron = ceil($total_records / $wyniki_na_strone);

        //zapytanie o konkretną stronę
        $select_query = "SELECT i.Item_id, i.Price, i.Name, t.type_name 
        FROM Item i JOIN types t ON i.type_id = t.type_id WHERE t.type_id = ".$id."
        LIMIT ".$offset.",".$wyniki_na_strone;
        
        $items = App::getDB()->query($select_query)->fetchAll();

        App::getSmarty()->assign("items",$items);
        App::getSmarty()->assign("category_id",$id);
        App::getSmarty()->assign("liczba_stron",$liczba_stron);
        App::getSmarty()->assign("strona",$strona);
        App::getSmarty()->assign("poprzednia_strona",$poprzednia_strona);
        App::getSmarty()->assign("nastepna_strona",$nastepna_strona);
        App::getSmarty()->display("Lista.tpl");
    }
}
