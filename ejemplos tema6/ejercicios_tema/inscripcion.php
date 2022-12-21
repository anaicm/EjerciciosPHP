<?php
if(isset($_POST["button"])){
	$edad=$_POST["edad"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellidos"];
	
	 if($edad == "1"){
		echo "Nombre: " . $nombre . "<br>";
		echo "Apellido: " . $apellido . "<br>";
		echo"La edad está entre: " . "15 a 25 años";
	}
	if($edad == "2"){
		echo "Nombre: " . $nombre . "<br>";
		echo "Apellido: " . $apellido . "<br>";
		echo"La edad está entre: " . "26 a 35 años";	
	}
	if($edad == "3"){
		echo "Nombre: " . $nombre . "<br>";
		echo "Apellido: " . $apellido . "<br>";
		echo"La edad está entre: " . "36 a 45 años";
	}
	if($edad == "4"){
		echo "Nombre: " . $nombre . "<br>";
		echo "Apellido: " . $apellido . "<br>";
		echo"La edad está en: " . "más de 45 años";
	}
	echo var_dump($edad);

}
?>