<!DOCTYPE html>
<html>
<head>
<title>Comprobar datos</title> 

</head>
<body>
<h1>Tus Datos de suscripcion: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
echo "apellidos: "; echo $_POST['apellidos']; echo "<br/>";
echo "E-mail: "; echo $_POST['email']; echo "<br/>";
echo "contrase&ntilde;a: "; echo $_POST['contras']; echo "<br/>";
echo "Sexo: "; echo $_POST['sexo']; echo "<br/>";
echo "Estudios: "; echo $_POST['estudios']; echo "<br/>";
echo "Dia de la semana: "; echo $_POST['dia']; echo "<br/>";
echo "Tu comentario: "; echo $_POST['comentario']; echo "<br/>";
?>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="enviar.html">Enviar</a>
<p>Los datos no son correctos: <a href="subcripcion_boletin.php">Volver a escribirlos</a>

</body>
</html>