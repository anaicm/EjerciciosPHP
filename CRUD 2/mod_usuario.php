<?php 
	
	require('conexion_base.php');
	
	$id=$_POST['id'];
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	
	$query="UPDATE usuarios SET usuario='$usuario', contrasenia='$password', email='$email' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				