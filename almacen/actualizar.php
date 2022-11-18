<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desarrollo actualizar despues de la búsqueda</title>
</head>
<?php
$codigo = $_GET["txt_CodigoArticulo"];
$seccion = $_GET["txt_Seccion"];
$nombre = $_GET["txt_NombreArticulo"];
$precio = $_GET["txt_Precio"];
$fecha = $_GET["txt_Fecha"];
$importado = $_GET["txt_Importado"];
$pais = $_GET["txt_PaisOrigen"];
require("conexionBaseDatos.php");
$conexion = mysqli_connect($direccionServidor,$usuario,$contraseña);
if (mysqli_connect_errno()) {
	echo "Fallo al connectar en la BBDD";	
	exit();
}
mysqli_select_db($conexion, $nombreBaseDatos)or die("No se encuentra la base de datos");
mysqli_set_charset($conexion, "UTF8");

$sql_actualizar = "UPDATE productos SET SECCION='$seccion',NOMBREARTICULO='$nombre',
					PRECIO='$precio', FECHA='$fecha', IMPORTADO='$importado',PAISDEORIGEN='$pais' WHERE CODIGOARTICULO ='$codigo'";
				
$resultado = mysqli_query($conexion, $sql_actualizar);
if ($resultado == false) {
	echo "Error al introducir los datos";	
}else{
	echo "Registro guardado correctamente<br><br>";	
	echo "<table>
		 	<tr>
				<td>$codigo</td>
				</tr>";
	echo "<tr>
			<td>$seccion</td>
			</tr>";
	echo "<tr>
		<td>$nombre</td>
		</tr>";
	echo "<tr>
		<td>$precio</td>
		</tr>";
	echo "<tr>
		<td>$fecha</td>
		</tr>";
	echo "<tr>
		<td>$importado</td>
		</tr>";
	echo "<tr>
		<td>$pais</td>
		</tr></table>";
}
mysqli_close($conexion);
?>

<body>
</body>
</html>