<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concesionario</title>
<link src="estilos.css" />
</head>
<style>
#cabecera{ background-color:#0F3;
color:#003;
font-size:14px;
text-align:center}
#insertar{}

</style>

<body>
<div id="cabecera">
<h1>Concesionario</h1>

</div>
<div id="insertar">
<h2><a href="insertar_coche.php">Insertar datos</a> </h2>
</div>
<table border="1">
	<tr>
    	<th>Matricula</th>
		<th>Marca</th>
		<th>Modelo</th>
    	<th>Tipo Vehículo</th>
    	<th>Nif</th>
        <th>Modificar</th>
        <th>Eliminar</th>
   </tr>
   <tr>
   <?php require("tabla_coches.php");
   ?>
   
   </tr>
   
  </table>


</body>
</html>
