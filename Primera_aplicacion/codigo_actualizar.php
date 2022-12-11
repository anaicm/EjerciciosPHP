//código actualizar concesionario
<?php
 $busqueda=$_GET['matricula'];
 echo $busqueda;
 require("Datos_Conexion.php");
 $conexion = mysqli_connect($direccion_base,$usuario_base,$contraseña);;
 if(mysqli_connect_errno()){
	echo("Fallo en la conexión con la base de datos");
	exit();	 
 }
 mysqli_select_db($conexion,$nombre_base)or die("No se encuenta la base de datos"); 
 mysqli_set_charset($conexion,"UTF8");
 $consulta_sql="select*from coches where matricula='$busqueda'";
 $resultado=mysqli_query($conexion,$consulta_sql);
 while($fila_consulta=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	echo $fila_consulta['marca'];
	echo $fila_consulta['modelo'];
	echo $fila_consulta['tipoVehiculo'];
	echo $fila_consulta['matricula'];
	echo $fila_consulta['nif'];


	
}
 
 
 
 
 ?>