
<?php
//código actualizar concesionario
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
 
 $consulta_sql="UPDATE coches SET marca='$marca',modelo='$modelo',tipoVehiculo='$tipoVehiculo',nif_cliente='$nif' WHERE matricula='$matricula'";
 $resultado=mysqli_query($conexion,$consulta_sql);
 if($resultado==false){
	echo"Error en la consulta";	 
 }else{
	echo"<tr><td>";	
	echo "$marca </td><td>"; 
	echo "$modelo </td><td>";
	echo "$tipoVehiculo </td><td>";
	echo "$matricula</td><td>";
	echo "$nif </td></tr>";
	 
 }


 
 mysqli_close($conexion); 

 
 ?>
 <a href="pagina_principal.php">Volver a la página principal </a>
  