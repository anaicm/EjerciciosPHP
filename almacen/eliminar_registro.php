<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desarrollo para eliminar registros en base de datos</title>
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
$sql_eliminar="DELETE FROM productos WHERE CODIGOARTICULO='$busqueda'";
$resultado = mysqli_query($conexion, $sql_eliminar);
if($resultado==false){
	echo"error en la consulta";
}else{
	if(mysqli_affected_rows($conexion)==0){
		echo"no hay registro que eliminar";
	}else{
		echo"se ha eliminado el registro" . mysqli_affected_rows($conexion);
	}
}
mysqli_close($conexion);
?>
</body>
</html>