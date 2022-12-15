<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar</title>
</head>

<body>
<?php
require("clase_vehiculo.php");
require("clase_cuatro_ruedas.php");
require("clase_dos_ruedas.php");
require("clase_coche.php");
require("clase_camion.php");
//Código para la clase Vehiculo sin ser abstracta
/*echo"Vehículo 1: <br>";
$vehiculo=new Vehiculo("negro",1500);
echo"Es de color: " . $vehiculo->getColor() . "<br>";
echo "Pesa: " . $vehiculo->getPeso() . " Kg <br>";
$vehiculo->circular();
$vehiculo->añadir_personas(70) . " Kg <br>";

//instanciar la clase vehículo
echo"<br> Vehículo 2: <br>";
$coche = new Coche("verde",1400);
$coche->añadir_personas(130);
echo "<br>El color del coche es: ".$coche->getColor()."<br />";
echo "El nuevo peso del coche es: ".$coche->getPeso()."<br />";
//repintar en rojo
echo"Cambio de color: <br>";
$coche->repintar("rojo");
//añadir 2 cadenas para la nieve
$coche->añadir_cadenas_nieve(2);
echo "El color del coche es: ".$coche->getColor()."<br /><br />";
echo "El número de cadenas para la nieve del coche es: ".$coche->getNumeroCadenasNieve()."<br /><br />";

echo"Vehículo de dos ruedas: <br>";
//instanciar los dos ruedas
$dos_ruedas = new Dos_ruedas("negro",120);
$dos_ruedas->añadir_personas(80);
echo "<br> Litros de gasolina:" . $dos_ruedas->poner_gasolina(20) . "<br />";
echo "El color del dos ruedas es: ".$dos_ruedas->getColor()."<br />";
echo "El peso del dos ruedas es: ".$dos_ruedas->getPeso()."<br />
<br />";


echo"Camión: <br>";
//instanciar el camión
$camion = new Camion("azul",10000);
$camion->setLongitud(10);
$camion->setNumeroPuertas(2);
$camion->añadir_remolque(5);
$camion->añadir_personas(80);
echo "<br> El color del camión es: ".$camion->getColor() . "<br />";
echo "El peso del camión es: ".$camion->getPeso() . "<br />";
echo "La longitud del camión es: ".$camion->getLongitud() . "<br />";
echo "El número de puertas del camión es: ".$camion->getNumeroPuertas()."
<br />";
*/

$dos_ruedas1 = new Dos_ruedas("rojo",150);
$dos_ruedas1->añadir_persona(70);
echo "El peso de dos ruedas es: ".$dos_ruedas1->getPeso()."<br />";
$dos_ruedas1->setColor("verde");
$dos_ruedas1->setCilindrada(1000);
vehiculo::ver_atributo($dos_ruedas1);
echo "<br />";
//instanciar el camión
$camion1 = new Camion("blanco",6000);
$camion1->añadir_persona(84);
$camion1->setColor("azul");
$camion1->setNumeroPuertas(2);
vehiculo::ver_atributo($camion1);


?>



</body>
</html>