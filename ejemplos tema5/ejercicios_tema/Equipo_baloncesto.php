<?php
/*Tras iniciarse en la definición de clases, vamos a generar una primera clase que nos modele un equipo
  de baloncesto:
	1) Generamos la estructura de ficheros dentro con una nueva carpeta y un documento php
		denominado equipo.php
	2) Crearemos una clase utilizando la palabra reservada class, y denominando a la clase
		Equipo
	3) Definiremos como única propiedad el nombre de equipo.
*/

class Equipo{
	private $nombreEquipo;
	private $posicion;
		
	/*Ampliaremos nuestro ejemplo de equipo de baloncesto añadiendo las siguientes propiedades y métodos a la clase:
	1) Utilizaremos la clase antes definida equipo.php.
	2) Añadiremos una nueva propiedad de tipo público denominado posición.
	3) Añadiremos una nueva función denominada mostrarEquipo y que realice un echo de la propiedad nombre.
	4) Añadiremos una nueva función denominada ponerEquipo y que modifique la propiedad 
		nombre de la clase a partir del parámetro introducido.
	5) Por último, dentro de nuestro fichero liga.php, usaremos la función ponerEquipo para definir el 
		nombre del equipo y mostrarEquipo para mostrarlo.
*/
 
	public function mostrarEquipo(){
		echo"El nombre del equipo es: ";
		echo $this->nombreEquipo;	//$this-> hace referencia a las propiedades del objeto
	}
	public function ponerEquipo($nombre){
		return $this->nombreEquipo=$nombre;	//$this-> En este caso la propiedad es igual al valor de la variable nombre
	}
/*Ampliaremos nuestro ejemplo de equipo de baloncesto añadiendo las siguientes propiedades y métodos a la clase:
	1) Utilizaremos la clase antes definida equipo.php.
	2) Definiremos el getter y el setter de la propiedad posición.
	3) Comprobaremos la correcta funcionalidad de estos métodos dentro del fichero liga.php
		Compara la definición de estos métodos con los primeros definidos contra la propiedad nombre.
*/
	public function getPosicion(){
		echo "La posición es: " .  $this->posicion;
		
	}
	
	public function setPosicion($pos){
		echo"La posición es: " . $this->posicion=$pos;
	}
/*Por último definiremos el contructor en nuestro ejemplo usado a lo largo de la unidad:
	1) Utilizaremos la clase antes definida equipo.php.
	2) Definiremos el constructor inicializando las propiedades nombre a “Equipo sin nombre” y posición a 0
	3) Comprobaremos la correcta funcionalidad del constructor a través de los getter dentro del 
		fichero liga.php
*/
	public function __construct(){
		$this->nombreEquipo="Equipo sin nombre";
		$this->posicion=0;
	}
}
?>