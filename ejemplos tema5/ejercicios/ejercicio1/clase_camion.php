<?php
class Camion  extends Cuatro_Ruedas{
	//propiedades
	private $longitud;
	//métodos getter y setter
	public function getLongitud(){
		return $this->longitud; 
	}
	public function setLongitud($longitud){
		$this->longitud = $longitud; 
	}

	//métodos públicos
	public function añadir_remolque($longitud_remolque){
		$this->longitud +=$longitud_remolque;
	}
	
}
?>