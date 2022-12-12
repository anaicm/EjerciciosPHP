<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar coche</title>
</head>
<?php
 $busqueda=$_GET['matricula'];
 require("Datos_Conexion.php");
 $conexion = mysqli_connect($direccion_base,$usuario_base,$contraseña);;
 if(mysqli_connect_errno()){
	echo("Fallo en la conexión con la base de datos");
	exit();	 
 }
 mysqli_select_db($conexion,$nombre_base)or die("No se encuenta la base de datos"); 
 mysqli_set_charset($conexion,"UTF8");
 $consulta_sql="delete from coches where matricula='$busqueda' ";
 $resultado=mysqli_query($conexion,$consulta_sql);
 if($resultado==false){
	echo"error en la consulta";
}else{
	if(mysqli_affected_rows($conexion)==0){
		echo"no hay registro que eliminar";
	}else{
		echo"se ha eliminado el registro" . mysqli_affected_rows($conexion);
	}
}
echo"<br>";
echo"<br>";
mysqli_close($conexion);
?>

 <a href="pagina_principal.php">Volver a la página principal </a>

<body>
</body>
</html>