<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

 $matricula=$_GET['txt_matricula'];
 $marca=$_GET["txt_marca"];
 $modelo=$_GET["txt_modelo"];
 $tipoVehiculo=$_GET["txt_tipoVehiculo"];
 $nif=$_GET["txt_nif"];

 require("Datos_Conexion.php");
 $conexion = mysqli_connect($direccion_base,$usuario_base,$contraseña);;
 if(mysqli_connect_errno()){
	echo("Fallo en la conexión con la base de datos");
	exit();	 
 }
 mysqli_select_db($conexion,$nombre_base)or die("No se encuenta la base de datos"); 
 mysqli_set_charset($conexion,"UTF8");

$sqlIntroducir = "Insert into coches (marca,modelo,tipoVehiculo,matricula,nif_cliente) 
				values ('$marca','$modelo','$tipoVehiculo','$matricula','$nif')";
				
$resultado = mysqli_query($conexion, $sqlIntroducir);
if ($resultado == false) {
	echo "Error al introducir los datos";	
}else{
	echo "Registro guardado correctamente<br><br>";	
	echo "<table>
		 	<tr>
				<td>$marca</td>
				</tr>";
	echo "<tr>
			<td>$modelo</td>
			</tr>";
	echo "<tr>
		<td>$tipoVehiculo</td>
		</tr>";
	echo "<tr>
		<td>$matricula</td>
		</tr>";
	echo "<tr>
		<td>$nif</td>
		</tr></table>";

}
mysqli_close($conexion);
?>

 <a href="pagina_principal.php">Volver a la página principal </a>

</body>
</html>