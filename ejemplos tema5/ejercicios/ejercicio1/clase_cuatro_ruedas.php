<?php
class Cuatro_Ruedas  extends Vehiculo{
	
	//propiedades
	private $Numero_puertas;
	//métodos getter y setter
	public function getNumeroPuertas(){
		return $this->numero_puertas; 
	}
	public function setNumeroPuertas($numero_puertas){
		$this->numero_puertas = $numero_puertas; 
	}
	
	//métodos públicos
	public function repintar($color){
		$this->setColor($color);
	}
	public function retomar($color){
		$this->setColor($color);
	}
	public function añadir_persona($peso_persona){
		$this->setPeso($this->getPeso() + $peso_persona);
	}

}
?>