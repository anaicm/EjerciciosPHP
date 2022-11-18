<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desarrollo para buscar en base de datos y actualizar</title>
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
	echo"<form action='actualizar.php' method='get'>";
	echo"<input type='text' name='txt_CodigoArticulo' value='" . $fila_consulta['CODIGOARTICULO'] . "'><br>";
	echo"<input type='text' name='txt_Seccion' value='" . $fila_consulta['SECCION'] . "'><br>";
	echo"<input type='text' name='txt_NombreArticulo' value='" . $fila_consulta['NOMBREARTICULO'] . "'><br>";
	echo"<input type='text' name='txt_Precio' value='" . $fila_consulta['PRECIO'] . "'><br>";
	echo"<input type='text' name='txt_Fecha' value='" . $fila_consulta['FECHA'] . "'><br>";
	echo"<input type='text' name='txt_Importado' value='" . $fila_consulta['IMPORTADO'] . "'><br>";
	echo"<input type='text' name='txt_PaisOrigen' value='" . $fila_consulta['PAISDEORIGEN'] . "'><br>";
	echo "<input type='submit' name='enviado' value='actualizar'><br>";
	echo"</from>";
}
mysqli_close($conexion);
?>


</body>
</html>