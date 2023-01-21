<?php
require("confing.php");
class Conexion{
	
	public static function conectar(){
		try{
			$conexion=new PDO("mysql:host=localhost;dbname=almacen","root","");
			//$conexion->setAttibute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			
		}catch(exception $e){
			die("Error: ". $e->getMessage());
			echo"La linea del error es: " . $e->getLine();
		}
		return $conexion;

	}
	   
	   
	   
}
   
   
?>