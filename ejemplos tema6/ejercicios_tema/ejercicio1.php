<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 1</title>
<!--Una vez estudiado cómo crear un formulario y diferentes elementos, ¿serías capaz de crear un 
	formulario html con dos elementos input text y un select?-->
</head>
<body>

<form method="post">
	<label>Número primero: <input type="text" name="num1" id="num1" /></label>
    	<br /><br />
	<label>Número segundo: <input type="text"  name="num2" id="num2"/></label>
    	<br /><br />
        <p>Que operación quieres realizar</p>
		<select name="operacion">
    		<option value="suma">Suma</option>
        	<option value="resta">resta</option>
        	<option value="multiplicacion">multipicación</option>
        	<option value="division">división</option>  
    	</select>
        <br /><br />
       <input type="submit"  name="button" id="enviar"/>
</form>
<?php
if(isset($_POST["button"])){
	$numero1=$_POST["num1"];//name recoge el valor introducido en el primer label
	$numero2=$_POST["num2"];//name recoge el valor introducido en el segundo label
	$operacion=$_POST["operacion"];
//para coger el value 
	if($operacion == "suma"){
		echo"La suma es: " . ($numero1+$numero2);
	}
	if($operacion == "resta"){
		echo"La resta es: " . ($numero1-$numero2);
	}
	if($operacion == "multiplicacion"){
		echo"La multiplicación es: " . ($numero1*$numero2);
	}
	if($operacion == "division"){
		echo"La división es: " . ($numero1/$numero2);
	}
	

}

?>
</body>
</html>