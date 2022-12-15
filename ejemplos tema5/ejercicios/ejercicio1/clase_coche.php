<?php
class Coche  extends Cuatro_Ruedas{
	//propiedades
	private $numero_cadenas_nieve;
	//métodos getter y setter
	public function getNumeroCadenasNieve(){
		return $this->numero_cadenas_nieve; 
	}
	public function setNumeroCadenasNieve($numero_cadenas_nieve){
		$this->numero_cadenas_nieve = $numero_cadenas_nieve;
	}

	//métodos públicos
	public function añadir_cadenas_nieve($num){
		$this->numero_cadenas_nieve +=$num;
	}
	public function quitar_cadenas_nieve($num){
		if ($this->numero_cadenas_nieve - $num < 0) {
			$this->numero_cadenas_nieve = 0;
		}else {
			$this->numero_cadenas_nieve -=$num;
		}
	}
}
?>