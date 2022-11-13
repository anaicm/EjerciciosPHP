<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estructura de control switch</title>
</head>

<body>
 <?php
    //Comparativo con if
    $numero=8;
    $numero2=4;
    if($numero==0){
      echo "Es cero";
    }elseif ($numero2==3) {
      echo "Es tres";
    }elseif ($numero==8) {
      echo "Es ocho";
    }
    //Utilizando el switch
    switch ($numero) {
      case 0:
        echo "Es cero";
        break;
      case 3:
        echo "Es tres";
        break;
      case 8:
        echo "Es ocho";
      break;
      default:
        echo "no es ninguno de los anteriores";
      break;
    }
     ?>
</body>
</html>