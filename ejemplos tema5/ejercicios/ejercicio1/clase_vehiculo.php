<?php
  /*class Vehiculo{
	//propiedades
	private $color;
	private $peso;
	//método constructor
	public function __construct($color,$peso){
		$this->color=$color;
		$this->peso=$peso;
	}
	//métodos getter y setter
	public function getColor(){
		return $this->color;
	}
		public function setColor($color){
		return $this->color=$color;
	}
		public function getPeso(){
		return $this->peso;
	}
		public function setPeso($peso){
		$this->peso=$peso;
	}
	//métodos publicos
	public function circular(){
		echo "El vehículo circula  <br>";
	}
	public function añadir_personas($persona_peso){
		echo "Con personas su peso es: " . $this->peso+=$persona_peso;
	}
}*/

abstract class vehiculo{
	// Declaración de atributos
	private $color;
	private $peso;
	//constructor
	public function __construct($color, $peso){
		$this->color = $color; // Inicialización del color.
		$this->peso = $peso; // Inicialización del peso.
	}
	//accesos
	public function getColor(){
		return $this->color; //devuelve el color
	}
	public function setColor($color){
		$this->color = $color; //escrito en el atributo color
	}
	public function getPeso(){
		return $this->peso; //devuelve el peso
	}
	public function setPeso($peso){
		$this->peso = $peso; //escrito en el atributo peso
	}
	//métodos públicos
	public function circula(){
		echo "El vehículo circula.<br />";
	}
	public static function ver_atributo($objeto) {
		if(method_exists($objeto,"getColor")) {
			echo "El color es:".$objeto->getColor()."<br />";
		}
		if(method_exists($objeto,"getPeso")) {
			echo "El peso es:".$objeto->getPeso()."<br />";
		}
		if(method_exists($objeto,"getCilindrada")) {
			echo "La cilindrada es:".$objeto->getCilindrada()."<br />";
		}
		if(method_exists($objeto,"getNumeroPuertas")) {
			echo "El número de puertas es:";
			echo $objeto->getNumeroPuertas()."<br />";
		}
		if(method_exists($objeto,"getLongitud")) {
			echo "La longitud es:".$objeto->getLongitud();
			echo "<br />";
		}
		if(method_exists($objeto,"getNumeroNeumaticoNieve")) {
			echo "El número de cadenas para la nieve es:";
			echo $objeto->getNumeroNeumaticoNieve()."<br />";
		}
	}
	abstract public function añadir_persona($peso_persona);
}

?>