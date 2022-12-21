<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio tema</title>

</head>

<body>
<!--Tras iniciarnos en la creación de los formularios vamos a generar un formulario que permita recoger la 
	información de inscripción a nuestra web de un usuario:
	1) Generamos la estructura de ficheros dentro con una nueva carpeta y un html que 
		denominaremos inscripción.html
	2) Crearemos la estructura básica con html
	3) Crearemos un nuevo formulario con la etiqueta form
	4) Introduciremos dos campos del tipo input text para recoger el Nombre y los Apellidos-->
<form method="post" action="inscripcion.php">
	<label>Nombre: <input type="text" name="nombre" /></label>
	<label>Apellidos: <input type="text"  name="apellidos"/></label>
<!--Ampliaremos nuestro formulario de inscripción antes iniciado:
	1) Abriremos el documento inscripción.html
	2) Añadiremos una nueva caja seleccionable para recoger el rango de edad (15 a 25 años, 26 a 35 
		años, 36 a 45 años, mas de 46 años)
	3) Incluiremos un botón de submit para enviar la información.-->
    	<select name="edad">
    		<option value="15 a 25 años">15 a 25 años</option>
        	<option value="26 a 35 años">26 a 35 años</option>
        	<option value="36 a 45 años">36 a 45 años</option>
        	<option value="más de 45 años">más de 45 años</option>  
    	</select>
        <br /><br />
       <input type="submit"  name="button" id="enviar"/>
<!--Añadiremos funcionalidad a nuestro formulario de inscripción en web:
	1) Abriremos el documento inscripción.html
	2) Añadiremos el método post al formulario
	3) Añadiremos como action el fichero que crearemos en el siguiente punto inscripcion.php
	4) Dentro del mismo directorio crearemos un nuevo documento denominado inscripcion.php
	5) Mostraremos la información enviada por el formulario mediante la función var_dump-->
</form>
<?php
require("inscripcion.php");
?>
</body>
</html>
