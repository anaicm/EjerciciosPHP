<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desarrollo buscar registro en base de datos </title>
</head>

<body>
<?php
$busqueda=$_GET["buscar"];
require("conexionBaseDatos.php");
$conexion = mysqli_connect($direccionServidor,$usuario,$contraseña);
if (mysqli_connect_errno()) {
	echo "Fallo al connectar en la BBDD";	
	exit();
}
mysqli_select_db($conexion, $nombreBaseDatos)or die("No se encuentra la base de datos");
mysqli_set_charset($conexion, "UTF8");

$sql_Consulta="SELECT * FROM productos WHERE NOMBREARTICULO LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $sql_Consulta);
while($fila_consulta=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	
echo "<table><tr><td>";
echo $fila_consulta['CODIGOARTICULO'] . "</td><td>";	
echo $fila_consulta['SECCION'] . "</td><td>";
echo $fila_consulta['NOMBREARTICULO'] . "</td><td>";
echo $fila_consulta['PRECIO'] . "</td><td>";
echo $fila_consulta['FECHA'] . "</td><td>";
echo $fila_consulta['IMPORTADO'] . "</td><td>";
echo $fila_consulta['PAISDEORIGEN'] . "</td></tr></table>";
echo"<br>";
	
}
mysqli_close($conexion);
?>
</body>
</html>