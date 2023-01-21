<?php
//----------------------conexion----------------------------------
try{
	$conexion=new PDO("mysql:host=localhost;dbname=almacen","root","");
	//$conexion->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");
	}catch(exception $e){
		die("Error: ". $e->getMessage());
		echo"La linea del error es: " . $e->getLine();
	}

//----------------------paginacion---------------------------------
$tamaño_pagina=10;
if(isset($_GET["pagina"])){
	if($_GET["pagina"]==1){
		header("location:index.php");
	}else{
		$pagina=$_GET["pagina"];
	}
}else{
	$pagina=1;
}
$empezar_desde=($pagina-1)*$tamaño_pagina;
$sql="SELECT * FROM usuarios";
$resul=$conexion->prepare($sql);
$resul->execute(array());
$numero_registros=$resul->rowCount();
$total_paginas=ceil($numero_registros/$tamaño_pagina);
//-------------------sentencia con el limite de la paginacion------------------
$sql_limite="SELECT * FROM usuarios LIMIT $empezar_desde,$tamaño_pagina";
//--------------------bucle para recorrer las páginas-----------------------
for($i=1;$i<=$total_paginas;$i++){
	echo"a href='?pagina=" . $i . "'>" . $i ."</a>";
}

?>