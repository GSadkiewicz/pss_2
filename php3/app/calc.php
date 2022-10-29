<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Twig
require_once _ROOT_PATH.'/lib/Twig/Autoloader.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
$procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
$messages = [];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

//domyślnie pokazuj wstęp strony (tytuł i tło)
$hide_intro = false;

// sprawdzenie, czy parametry zostały przekazane - jeśli nie to wyświetl widok bez obliczeń
if ( $kwota != null && $procent != null && $lata !=null) {
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';
		

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
		$messages [] = 'Podaj kwotę kredytu';
	}
	if ( $procent == "") {
		$messages [] = 'Podaj procent kredytu';
	}
	if ( $lata == "") {
		$messages [] = 'Podaj ilość lat';
	}
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) == 0) {
	
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $kwota ) || $kwota <= 0) {
			$messages [] = 'Wpisana kwota jest niepoprawna';
		}
	
		if (! is_numeric( $procent ) || $procent < 0) {
			$messages [] = 'Wpisany procent jest niepoprawny';
		}
		if (! is_numeric( $lata ) || $lata <= 0 ) {
			$messages [] = 'Wpisana ilość lat jest niopoprawna';
		}
		
	
	}
	
	// 3. wykonaj zadanie jeśli wszystko w porządku
	
	if (count ( $messages ) == 0) { // gdy brak błędów
		
		$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
		
		//konwersja parametrów na int
	$kwota = intval($kwota);
	$procent = intval($procent);
	$lata = intval($lata);

	$result = ($kwota/($lata * 12)) + (($kwota/($lata * 12))*($procent / 100));
	$result = round($result, 3);
	}
}

// 4. Przygotowanie szablonu i zmiennych

//start Twig
Twig_Autoloader::register();
//załaduj szablony (wskazanie folderów z potrzebnymi szablonami)
$loader = new Twig_Loader_Filesystem(_ROOT_PATH.'/templates'); //szablon ogólny
$loader->addPath(_ROOT_PATH.'/app'); //szablon strony kalkulatora
//skonfiguruj folder cache
$twig = new Twig_Environment($loader, array(
    'cache' => _ROOT_PATH.'/twig_cache',
));

//przygotowanie zmiennych dla szablonu
$variables = array(
	'app_url' => _APP_URL,
	'root_path' => _ROOT_PATH,
	'page_title' => 'Przykład 04',
	'page_description' => 'Profesjonalne szablonowanie oparte na bibliotece Twig',
	'page_header' => 'Szablony Smarty',
	'hide_intro' => $hide_intro
);
if (isset($kwota)) $variables ['kwota'] =  $kwota;
if (isset($lata)) $variables ['lata'] = $lata;
if (isset($procent)) $variables ['procent'] = $procent;
if (isset($result)) $variables ['result'] = $result;
if (isset($messages)) $variables ['messages'] = $messages;
if (isset($infos)) $variables ['infos'] = $infos;
if (isset($operation_name)) $variables ['operation_name'] = $operation_name;

// 5. Wywołanie szablonu (wygenerowanie widoku)
echo $twig->render('calc.html', $variables);