<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla Cardinales Ordinales</title>
</head>

<style>
<!--Aplica estilos a la tabla-->
	table,th,td{ 
		border:1px solid black;
	}
	table{
		border-collapse:collapse;
	}
	
</style>

<body>
<!--Se crea la tabla y los encabezados-->
	<table><tr><th>cardinales</th><th>ordinales</th></tr>
    <?php
	$cardinal=1;
	$ordinal="";
	//bucle while
	while($cardinal<=10){
		switch($cardinal){
			case 1:
			$ordinal="Primero";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 2:
			$ordinal="Segundo";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 3:
			$ordinal="Tercero";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 4:
			$ordinal="Cuarto";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 5:
			$ordinal="Quinto";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 6:
			$ordinal="Sexto";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 7:
			$ordinal="Septimo";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 8:
			$ordinal="Octavo";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 9:
			$ordinal="Noveno";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
			case 10:
			$ordinal="Decimo";
			echo "<tr><td>$cardinal</td><td>$ordinal</td></tr>";
			break;
		}
		//incrementa el último número cardinal
		$cardinal++;
		
	}
	
	
	
	
	?>
    
    </table>

</body>
</html>