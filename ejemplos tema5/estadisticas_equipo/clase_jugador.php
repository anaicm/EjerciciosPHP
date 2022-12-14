<?php
// clase jugador
class Jugador{
	private $numeroJugador;
	private $puntos;	
	//constructor
	public function __construct($numJugadores){
		$this->numeroJugador=$numJugadores;
		
	}
	//métodos getter
	public function getNumeroJugador(){
		return $this->numeroJugador;
	}
	public function getPuntos(){
		return $this->puntos;
	}
	// método añadir puntos
	public function addPuntos($puntos){
		if($puntos>0){
			$this->puntos+=$puntos;
		}
	}
	
	
}
?>