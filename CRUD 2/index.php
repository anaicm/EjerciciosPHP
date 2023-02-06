<?php
	require('conexion_base.php'); //realiza la conexion BBDD, llamando al archivo que lo conecta.
	$query="SELECT id, usuario, email FROM usuarios";//realiza una consulta por id en la BBDD.
	$resultado=$mysqli->query($query);//muestra la consulta de la base.
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Usuarios</h1></center>
		<!--lleva a la página para crear un usuario nuevo
        	que conecta con el archivo guardar usuario-->
		<a href="nuevo.php">Nuevo usuario</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Usuario</b></td>
					<td><b>Email</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
                <!-- La funcion fetch_assoc() Obtine una fila de resultado como un array asociativo
                	 Array asociativo clave->valor -->
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['usuario'];?><!--coje todos los valores del columna usuario-->
							</td>
							<td>
								<?php echo $row['email'];?><!--coje todos los valores del columna email-->
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a><!--modifica a través del campo id-->
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a><!--elimina a través del campo id-->
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
