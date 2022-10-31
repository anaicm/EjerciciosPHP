<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Funcion Encriptar y Desencriptar</title>
</head>

<body>

<?php
 function encriptar($valor){
	 global $metodo;
	 global $clave;
	 global $vector_iniciacion;
	 return openssl_encrypt($valor,$metodo,$clave,false,$vector_iniciacion);
 }
 function desencriptar($valor){
	 global $metodo;
	 global $clave;
	 global $vector_iniciacion;
     return openssl_decrypt($valor, $metodo, $clave, false, $vector_iniciacion);

 }
?>
</body>
</html>