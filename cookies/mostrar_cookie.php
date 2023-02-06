<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar cookies</title>
<?php
    include("codigo_cookies.php");
?>
</head>
<body>
<p>Hola 
    <?php mostrar_cookie();?>
</p>
<form method="get" action="codigo_cookies.php" >
    <input type="submit" name="borrar" id="borrar" value="Borrar">
</form>
</body>
</html>