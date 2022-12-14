<?php
// clase equipo
class Equipo{
	//propiedades
	private $jugador=array();
	//constructor
	public function __construct(){
	}
	//función añadir jugador
	public function addJugador($unJugador){
		if($unJugador instanceof Jugador){
			$this->jugador[]=$unJugador;
		}
	}
	//método getter
	public function getJugador(){
		return $this->jugador;
	}
	//puntuación total de los jugadores 
	public function getTotal(){
		$total=0;
		foreach($this->jugador as $arr){
		$total+=$arr->getPuntos();
		}
		return $total;
	}

}
?>