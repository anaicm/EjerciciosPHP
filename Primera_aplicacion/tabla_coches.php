<?php
 
 require("Datos_Conexion.php");
 $conexion = mysqli_connect($direccion_base,$usuario_base,$contraseña);;
 if(mysqli_connect_errno()){
	echo("Fallo en la conexión con la base de datos");
	exit();	 
 }
 mysqli_select_db($conexion,$nombre_base)or die("No se encuenta la base de datos"); 
 mysqli_set_charset($conexion,"UTF8");
 $consulta_sql="select*from coches ";
 $resultado=mysqli_query($conexion,$consulta_sql);
 
 while($fila_tabla=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	echo"<tr><td>";	
	echo $fila_tabla["matricula"] . "</td><td>";
	echo $fila_tabla["marca"] . "</td><td>"; 
	echo $fila_tabla["modelo"] . "</td><td>";
	echo $fila_tabla["tipoVehiculo"] . "</td><td>";
	echo $fila_tabla["nif_cliente"] . "</td><td>";
	echo "<a href='actualizar_coches.php?matricula=". $fila_tabla["matricula"]."'>Actualizar</a>
		</td><td>";
	echo "<a href='eliminar_coches.php?matricula=". $fila_tabla["matricula"]."'>Eliminar</a>
		</td></tr>";
		
/*	echo "<form action='eliminar_coches.php' method='get'>
			<label>
				<input type='submit' name='borrar' value='Eliminar'/>
			</label>
		</form></td></tr>";*/
	
 }
 mysqli_close($conexion);
 
 
?>