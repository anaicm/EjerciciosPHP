<?php
class Dos_Ruedas  extends Vehiculo{
	//propiedades
	private $cilindrada;
	//métodos getter y setter
	public function getCilindrada(){
		return $this->cilindrada; 
	}
	public function setCilindrada($cilindrada){
		$this->cilindrada = $cilindrada; 
	}

	//métodos públicos
	public function poner_gasolina($litros){
		echo $this->setPeso($this->getPeso()+$litros);
	}
	public function añadir_persona($peso_persona){
		$this->setPeso($this->getPeso() + $peso_persona + 2);
	}
}
?>