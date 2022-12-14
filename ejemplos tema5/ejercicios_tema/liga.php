<?php
/*Continuaremos con el ejemplo del equipo de baloncesto antes definido:
	1) Dentro de la estructura de ficheros antes generada, crearemos un segundo fichero 
		denominado liga.php
	2) Incluiremos la clase equipo.php mediante un require
	3) Crearemos dos equipos mediante la palabra reservada new, con dos nuevos objetos que se 
		denominen VLCBasket y RMDBasket*/
require("Equipo_baloncesto.php");
 $VLCBasket=new Equipo();
 $RMDBasket=new Equipo();
 
 
 $RMDBasket->ponerEquipo("Madrid");
 $RMDBasket->mostrarEquipo();
 echo"<br>";
 
 $VLCBasket->setPosicion(3);
 echo"<br>";
 //concatenar funciones
 $RMDBasket->ponerEquipo("Sevilla") .  $RMDBasket->mostrarEquipo();
  
 echo"<br>";
 $RMDBasket->setPosicion(5);
  echo"<br>";
 //comprobar el constructor con los métodos getter 
 $nuevoEquipo=new Equipo();
 $nuevoEquipo->mostrarEquipo();
 echo"<br>";
 $nuevoEquipo->getPosicion();

?>