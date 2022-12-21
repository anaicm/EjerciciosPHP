<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conversor de pesetas en una página</title>
</head>

<body>
<?php 
if (isset($_POST["estado"]) && $_POST["estado"]==1) 
{ 
	echo "Son "; 
	if ($_POST["conv"]==1){ 
		echo $_POST["cantidad"]/166.386." euros<BR>"; 
	}else{
		echo $_POST["cantidad"]/180.386." dolares<BR>"; 
	} 
}
?>

<form method="post" action=""> 
	<label>Introduzca la cantidad: 
		<input type="text" name="cantidad" size="10"> 
    </label>
	<input type="submit" name="button" value="enviar">
    <br> 
	<label>Seleccione el tipo de conversion:<br> 
		<input type="radio" name="conv" value="1" checked>Euros
    </label>
    <br>
    <label> 
		<input type="radio" name="conv" value="2">dolares
    </label>
    <br>
         
	<input type="hidden" name="estado" value="1"><!--indica que el elemento todavía no está , o ya no es relevante,
    												 de esta forma vuelve a entrar en el formulario-->
</form>
</body>
</html>