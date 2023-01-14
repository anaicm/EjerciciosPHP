<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php
$mysqli = new mysqli("localhost","root","","Nombre_alumnos");
if ($mysqli->connect_errno){
 echo"Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
?>
</head>

<body>
</body>
</html>