<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora*/
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->id_x = isset($_REQUEST ['id_x']) ? $_REQUEST ['id_x'] : null;
		$this->form->id_proc = isset($_REQUEST ['id_proc']) ? $_REQUEST ['id_proc'] : null;
		$this->form->id_y = isset($_REQUEST ['id_y']) ? $_REQUEST ['id_y'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->id_x ) && isset ( $this->form->id_proc ) && isset ( $this->form->id_y ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->id_x == "") {
			$this->msgs->addError('Podaj kwotę kredytu');
		}
		if ($this->form->id_proc == "") {
			$this->msgs->addError('Podaj procent kredytu');
		}
		if ($this->form->id_y == "") {
			$this->msgs->addError('Podaj ilość lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->id_x ) || $this->form->id_x <= 0) {
				$this->msgs->addError('Wpisana kwota jest niepoprawna');
			}
			
			if (! is_numeric ( $this->form->id_proc ) || $this->form->id_proc < 0) {
				$this->msgs->addError('Wpisany procent jest niepoprawny');
			}

			if (! is_numeric ( $this->form->id_y ) || $this->form->id_y <= 0) {
				$this->msgs->addError('Wpisana ilość lat jest niopoprawna');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->id_x = intval($this->form->id_x);
			$this->form->id_proc = intval($this->form->id_proc);
			$this->form->id_y = intval($this->form->id_y);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			
			$result = ($this->form->id_x/($this->form->id_y *12)) + (($this->form->id_x/($this->form->id_y *12))*($this->form->id_proc/100));

			$result = round($result, 3);
			$this->result->result = $result;

			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
