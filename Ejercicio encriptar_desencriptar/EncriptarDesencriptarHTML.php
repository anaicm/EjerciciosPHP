<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Encriptar y desencriptar</title>



<style>

form{
	width:250px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#ccc;
}


</style>

</head>
<body>
<?php
require("Configuracion_Encriptacion.php");//crea un objeto de una clase y llama a la funcion
$objeto=new Configuracion_Encriptacion();
 session_start();
 if(!isset($_SESSION["iv"])){
 	$_SESSION["iv"] = $objeto->generar_IV();
 }
 
 //para pasar valor solo hay tres métodos get, post y session
 //condicion:
 //si es null que es la primera vez entra, por lo que la segunda entrara y no genera uno nuevo ya que no es null;
?>




<form action="Programa_Encriptar_Desencriptar.php" method="post">
<p>Cadena:
 <label for="cadena"></label><input type="text" name="cadena" id="cadena" /></p>
<input type="submit" name="encriptar" id="encriptar" value="encriptar" />
<input type="submit" name="Desencriptar" id="Desencriptar" value="Desencriptar"/>
</form>



</body>
</html>