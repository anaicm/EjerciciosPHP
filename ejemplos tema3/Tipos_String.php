<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tipos de string</title>
</head>

<body>
   <?php
    //Definicion de variables
    $frasePolitico='España va bien!!';
    $tengoEuros=10;
    $fraseTrabajador="Tengo ${tengoEuros} euros";

    echo "Frase de politico: ".$frasePolitico;
    echo "<br>Frase de trabajador: ".$fraseTrabajador;
    //CAmbio de contenido
    $frasePolitico='España no va tan bien!!';
    echo "<br>Frase modificada: ".$frasePolitico;
     ?>
</body>
</html>