<?php
//clase dado

class Dado{
// atributos

	private $minNumDado;
	private $maxNumDado;

//constructor

	public function __construct($minNumDado,$maxNumDado){
		$this->minNumDado=$minNumDado;
		$this->maxNumDado=$maxNumDado;
	}

//estableciendo getter

	public function getMinNumDado(){
		return $this->minNumDado;
	}
	public function getMaxNumDado(){
		return $this->maxNumDado;
	}
//estableciendo setter
	public function setMinNumDado($minNumDado){
		$this->minNumDado=$minNumDado;
	}
	public function setMaxNumDado($maxNumDado){
		$this->maxNumDado=$maxNumDado;
	}
//método para tirar el dado de forma aleatoria

	public function tirarDado(){
		return rand($this->minNumDado,$this->maxNumDado);
	}
	
}
?>