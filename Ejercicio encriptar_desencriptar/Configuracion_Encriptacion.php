<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear clave para vector de iniciación</title>
</head>

<body>

<?php
class Configuracion_Encriptacion{
	
	
	var $metodo;
	function __construct(){
		$this->metodo = "AES-256-cbc";
	}

	//genera un valor para descodificacion
	function generar_IV (){
	return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($this->metodo)));
	}
	
	 
	 
}
?>



</body>
</html>