<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tablas multiplicar</title>
</head>

<body>

<?php 
	$tablas=array(
	"primera"=>5,
	"segunda"=>13,
	"tercera"=>11

	);
	//ancho del borde de la tabla
	echo "<table border=1>";
	echo "<tr>";
	//dibuja la primera fila de la tabla
	foreach ($tablas as $celda=>$valor){
		echo "<th>" . $celda . "tabla </th>";

	}
	echo"</tr>";
	
	// dibujamos las filas
	for($i=1;$i<=10;$i++){
		
		echo "<tr>";
		
		//dibujamos las celdas
		
		foreach($tablas as $valor){
			//multiplicamos el indice por el número en cuestión
			echo"<td>". $valor . "x" . $i . "=" . $valor*$i . "</td>";
		}
		
		echo"</tr>";
		
	}
	echo"</table>";


?>
</body>
</html>