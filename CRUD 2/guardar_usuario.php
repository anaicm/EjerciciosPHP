<?php 
	
	require('conexion_base.php');
	
	$usuario=$_POST['usuario'];//coje el valor que entra por name en usuario
	$password=$_POST['password'];//coje el valor que entra por name en password
	$email=$_POST['email'];////coje el valor que entra por name en email
	
	$query="INSERT INTO usuarios (usuario, contrasenia, email) VALUES ('$usuario','$password','$email')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	