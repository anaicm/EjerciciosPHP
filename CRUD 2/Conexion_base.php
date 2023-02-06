<?php

//la conexión a la base de datos se puede hacer creando un objeto nuevo de la libreria 
//mysqli
	$mysqli=new mysqli("localhost","root","","sistemas"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
/*//y guardando en variables y llamando a la funcion mysqli_connect()
	$direccion_Base="localhost";
	$nombre_Base="sistema";
	$usuario_base="root";
	$contraseña="";
	
	//gestionar errores de la base de datos
	
	if(mysqli_connect_errno()){
		echo"Conexión Fallida: ",mysqli_connect_errno() ;
		exit();
	}
	//en el documento donde se llame a la conexión
		$conexion=mysqli_connect($direccion_Base,$usuario_base,$contraseña);
	*/
?>