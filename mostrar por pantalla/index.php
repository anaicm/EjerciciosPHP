
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSS</title>
<link href="hoja_estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
<div id="cabecera">
	<h1>Usuarios</h1>
</div>
<div>
<form action="" method="post">
<table class="tabla_actualizar">
		<tr>
    		<td>
            	<label>Nombre: </label>
            	<input type="text" name="nombre" id="nombre"/>
            <td>	
    	</tr>
    	<tr>
    		<td>
            	<label>Valor:  </label>
            	<input type="text" name="nombre" id="nombre"  />
            <td>
       	</tr>
        <tr>
        	<td>
            	<input type="submit" name="actualizar" id="actualizar" value="INSERTAR" />
            </td>
	</table>
</form>
</div>

<?php require_once("usuarios_controlador.php"); ?>

<footer>
<!--Código paginación-->

<div id="elemento3">
<table>
	<tr>
    	<td><input type="button" name="boton1" class="boton" id="boton1" value="BOTON1"/></td>
    </tr>
</table>
</div>
<div id="elemento2">
<table>
	<tr>
       <td><input type="button" name="boton2" class="boton" id="boton2" value="BOTON2"/></td>
    </tr>
</table>
</div>
</footer>





</body>
</html>
