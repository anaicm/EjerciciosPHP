<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tirar el dado</title>
</head>

<body>

<?php
//se importa la clase tirar dado
require_once("clase_dado.php");

//dado con los números mínimo y máximo

$dado=new Dado(0,12);

//repretición

for($i=0; $i < $dado->getMaxNumDado(); $i++){
	echo $dado->tirarDado() . "<br>";
}

//para crear el objeto con los setter
//se crea un nuevo dado

$dado1=new Dado(0,0);
// con los setter se le da valor al mínimo y máximo del dado

$dado1->setMinNumDado(0);
$dado1->setMaxNumDado(10);

for($a=0;$a<$dado->getMaxNumDado();$a++){
	echo "En esta tirada sale: " . $dado1->tirarDado() . "<br>";
	
}

?>
</body>
</html>