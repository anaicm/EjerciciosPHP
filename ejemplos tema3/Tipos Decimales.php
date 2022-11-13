<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tipos Decinmales</title>
</head>  
  <body>
    <?php
    //Definicion de variables
    $dinero=3.50;
    echo "El dinero que tengo es: ".$dinero;
    //Cambiar el contenido
    $dinero=10.66;
    echo "<br> El dinero que tengo es: ".$dinero;
    //Convirtiendo a entero
    $soloEuros=(int)$dinero;
    echo "<br> Los euros que tengo: ".$soloEuros;
     ?>
  </body>
</html>