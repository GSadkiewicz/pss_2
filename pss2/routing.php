<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('glowna'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('glowna', 'GlownaCtrl');
Utils::addRoute('kategorie', 'KategorieCtrl');
Utils::addRoute('produkty', 'ProduktyCtrl');
Utils::addRoute('rezerwacja', 'RezerwacjaCtrl');
Utils::addRoute('kontakt', 'KontaktCtrl');
Utils::addRouteEx('kontakt/edytuj', null, 'KontaktCtrl', 'Edycja');
Utils::addRouteEx('onas/edytuj', null, 'onasCtrl', 'Edycja');
Utils::addRoute('onas', 'onasCtrl');
Utils::addRouteEx('rezerwacja/rezerwuj', null, 'RezerwacjaCtrl', 'Rezerwuj');
Utils::addRouteEx('rezerwacja/typ', null, 'RezerwacjaCtrl', 'TYP');
Utils::addRoute('produkt', 'ProduktCtrl');
Utils::addRoute('logowanie', 'loginCtrl');
Utils::addRouteEx('zaloguj', null, 'loginCtrl', 'zaloguj');
Utils::addRouteEx('wyloguj', null, 'loginCtrl', 'wyloguj');
Utils::addRoute('rezerwacje', 'mojeRezerwacjeCtrl');
Utils::addRoute('wszystkierezerwacje', 'wszystkieRezCtrl');
Utils::addRoute('produkty_lista', 'ListaCtrl');
//Utils::addRoute('action_name', 'controller_class_name');