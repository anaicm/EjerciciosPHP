<?php
//clase temporada
require_once("clase_jugador.php");
require_once("clase_equipo.php");

//instanciamos la clase
$elEquipo=new Equipo();
for($i=1;$i<=9;$i++){
	$unJugador=new Jugador($i);
	$puntosAleatorios=rand(20,100);	
	$unJugador->addPuntos($puntosAleatorios);
	$elEquipo->getJugador($unJugador);
}
//imprime el array equipo con los puntos y dorsales de cada jugador
echo"<pre>";print_r($elEquipo);"</pre><br>";
//total de puntos del equipo
$totalPuntos=$elEquipo->getTotal();
echo"<br> total de puntos: " . $totalPuntos;

?>