<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creacion arrays</title>
</head>

<body>
 <?php
    //Generar 30 variables altura
    $altura1=164;
    $altura2=178;
    $altura3=169;
    //...
    $altura30=182;
    //Media de alturas
    $media=($altura1+$altura2+$altura3+$altura30)/30;
    //Arrays
    $alturasPrimer=array(164,178,169,182);
    $alturasSegundo=array(164,178,169,182);
    //Mostrar una posicion del Array
    echo "La posicion 0 del array es: " . $alturasSegundo[0];
    echo "<br>";
    echo "La posicion 2 del array es: " . $alturasSegundo[2];
    echo "<br>";
    //Modificar el contenido de una posicion
    $alturasSegundo[2]=178;
    echo "La nueva posicion 2 del array es: " . $alturasSegundo[2];
    //Anyadir un nuevo elemento
    $alturasSegundo[]=189;
    echo "<br>";
    echo "La nueva posicion 4 del array es: " . $alturasSegundo[4];
    //Imprimir todos los elementos
    echo "<br>------------<br>";
    print_r($alturasSegundo);
    echo "<br>------------<br>";
    //Eleminar un elemento
    unset($alturasSegundo[2]);
    echo "<br>";
    echo "La nueva posicion 3 del array es: " . $alturasSegundo[3];
    echo "<br>------------<br>";
    print_r($alturasSegundo);
    echo "<br>------------<br>";
     ?>
</body>
</html>