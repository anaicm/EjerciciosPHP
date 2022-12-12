<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario actualizar</title>
</head>
<!--Con este código se consigue que a través de la matrrícula que es la PK de la tabla coches
	busque el objeto y lo muestre por pantalla en forma de formulario, con el valor de cada campo-->
<!--la llamada a la matricula que se realiza con GET, se hace al archivo tabla_coches.php, el cual tiene el enlace 
 	que me lleva a este cuestionario-->
<!--a la vez este cuestionario se comunica con el archivo "codigo_actualizar.php" encargado de realizar la actualización
	se comunica con action="" en el <form>-->

<body>
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
 $consulta_sql="select * from coches where matricula='$busqueda'";
 $resultado=mysqli_query($conexion,$consulta_sql);
 while($fila_consulta=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	echo "<h1>Actualizar vehículo</h1>
		<form name='form1' method='get' action='codigo_actualizar.php'>
			<table border='0' align='center'>
    			<tr>
        	<td>Matricula</td>
        	<td><label for='txt_matricula'</label>
        		<input type='text' name='txt_matricula' id='txt_matricula' value=" . $fila_consulta['matricula'] . "></td>
    	</tr>";
	echo "<tr>
        			<td>Marca</td>
        			<td><label for='txt_marca'</label>
        				<input type='text' name='txt_marca' id='txt_marca' value=" . $fila_consulta['marca'] . "></td>
    			</tr>";
	
	echo "<tr>
        	<td>Modelo</td>
        	<td><label for='txt_modelo'</label>
        		<input type='text' name='txt_modelo' id='txt_modelo' value=".$fila_consulta['modelo']."></td>
    	</tr>";

    echo "<td>Tipo de Vehículo</td>
        	<td><label for='txt_tipoVehiculo'</label>
        		<input type='text' name='txt_tipoVehiculo' id='txt_tipoVehiculo' value=".$fila_consulta['tipoVehiculo']."></td>
    	</tr>"; 
	echo"<tr>
        	<td>NIF</td>
        	<td><label for='txt_nif'</label>
        		<input type='text' name='txt_nif' id='txt_nif' value=". $fila_consulta['nif_cliente']."></td>
    	</tr>";
	echo"<tr>
    		<td align='center'><input type='submit' name='Enviar' id='Enviar' value='Enviar'></td>
			<td align='center'><input type='reset' name='Borrar' id='Borrar' value='Borrar'></td>
    	</tr>
		</table>

	</form>";
}
mysqli_close($conexion);
?>

</body>
</html>