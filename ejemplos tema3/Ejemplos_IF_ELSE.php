<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejemplo sobre if else</title>
</head>

<body>
   <?php
    $numero1=10;
    $numero2=12;
    echo "<div class=resultado>";
    if($numero1>$numero2){
      echo "NUMERO 1 mayor que NUMERO2";
    }elseif ($numero1==$numero2) {
      echo "IGUALES";
    }else{
      echo "NUMERO2 mayor que NUMERO1";
    }
    echo "</div>";
     ?>
</body>
</html>