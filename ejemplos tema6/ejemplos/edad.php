<?php
$guardar = $_POST['guardar'];
if($guardar == 'si'){
 date_default_timezone_set('Europe/Madrid');
 $fecha_actual = date('Y');
 //CON ESTOS DATOS CALCULAMOS LA FECHA DE NACIMIENTO
 $nombre_edad = $_POST['nombre_edad'];
 $dia = $_POST['dia'];
 $mes = $_POST['mes'];
 $anio = $_POST['anio'];
 $edad_Quetiene = $fecha_actual - $anio;
 echo "<center><b><h1>NOMBRE: ".$nombre_edad."<br>";
 echo "EDAD: ".$edad_Quetiene."</h1></b></center>";
 }
else{
	
}
?>