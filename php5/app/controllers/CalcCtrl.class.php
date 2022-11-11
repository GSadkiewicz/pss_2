<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->id_x = getFromRequest('id_x');
		$this->form->id_proc = getFromRequest('id_proc');
		$this->form->id_y = getFromRequest('id_y');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->id_x ) && isset ( $this->form->id_proc ) && isset ( $this->form->id_y ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->id_x == "") {
			getMessages()->addError('Podaj kwotę kredytu');
		}
		if ($this->form->id_proc == "") {
			getMessages()->addError('Podaj procent kredytu');
		}
		if ($this->form->id_y == "") {
			getMessages()->addError('Podaj ilość lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->id_x ) || $this->form->id_x <= 0) {
				getMessages()->addError('Wpisana kwota jest niepoprawna');
			}
			
			if (! is_numeric ( $this->form->id_proc ) || $this->form->id_proc < 0) {
				getMessages()->addError('Wpisany procent jest niepoprawny');
			}

			if (! is_numeric ( $this->form->id_y ) || $this->form->id_y <= 0) {
				getMessages()->addError('Wpisana ilość lat jest niopoprawna');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->id_x = intval($this->form->id_x);
			$this->form->id_proc = intval($this->form->id_proc);
			$this->form->id_y = intval($this->form->id_y);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji

			$result = ($this->form->id_x/($this->form->id_y *12)) + (($this->form->id_x/($this->form->id_y *12))*($this->form->id_proc/100));

			$result = round($result, 3);
			$this->result->result = $result;
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Przykład 06b');
		getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
