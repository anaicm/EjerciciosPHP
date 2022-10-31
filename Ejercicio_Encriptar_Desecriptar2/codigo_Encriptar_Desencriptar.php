<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Codigo Encriptar desencriptar</title>
</head>

<body>
<?php
//clave
$clave="Encriptar Codigo";
//cadena para encriptar
$cadenaEncriptar=$_POST["cadena"];
//método de encriptacion AES-256
~$metodo="AES-256-cbc";
//funcion base64_decode, descodifica el contenido de un archivo binario.
session_start();
$vector_iniciacion = base64_decode($_SESSION["iv"]);
require("funcion_Encriptar_Desencriptar.php");
 
 if(isset($_POST["encriptar"])){
	 echo encriptar($cadenaEncriptar);
 }else if(isset($_POST["Desencriptar"])){
	 echo desencriptar($cadenaEncriptar);
 }

?>
<br>
<a href="javascript:history.back()">Volver</a>
</body>
</html>