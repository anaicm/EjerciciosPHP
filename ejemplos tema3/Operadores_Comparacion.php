<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operadores de comparación</title>
</head>

<body>
 <?php
    //Dos numeros para poderlos comparar
    $num1=0;
    $num2=3;

    //Operadores
    if ($num1==$num2) {
      echo "Ambos numeros son iguales";
    }elseif ($num1>$num2) {
      echo "Num 1 es mayor que num2";
    }elseif ($num1<$num2) {
      echo "Num 1 es menor que num2";
    }elseif ($num1!=$num2) {
      echo "Num 1 es distinto que num2";
    }elseif ($num1<=$num2) {
      echo "Num 1 es menor o igual que num2";
    }elseif ($num1>=$num2) {
      echo "Num 1 es mayor o igual que num2";
    }
     ?>
</body>
</html>