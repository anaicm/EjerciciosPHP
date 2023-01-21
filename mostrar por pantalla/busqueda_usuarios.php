<?php

class Devuelve_usuarios{
	private $db;
	private $usuarios;
	public function __construct(){
		require_once("conexion.php");
		$this->db=Conexion::conectar();
		$this->usuarios=array();
		
	}
	public function get_usuario(){
		$consulta_sql= $this->db->query("SELECT * FROM usuarios");
		while($filas=$consulta_sql->fetch(PDO::FETCH_ASSOC)){
			$this->usuarios[]=$filas;
		
		}
		return $this->usuarios;
	}
	
	
}	
		
		
		
		
		
/*		$consulta=$this->conexion_db->prepare($consulta_sql);
		$consulta->execute(array());
		$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
		$consulta->closeCursor();
		return $resultado;
		$this->conexion_db=null;*/
		


?>