 
 <?php //ambito de las variables 
 ?>
 <?php
 //variable de calculo de areas
 $area=0;
 $lado=5;
 
 ?>
 
 <div class="resultado">
 <?php
 //area del cuadrado
 echo "El area es: " . $area=$lado*$lado . "<br>";
 
 ?>
 
<?php
 //variable de calculo de areas
 $area=0;
 $lado=5;
 //Definimos el calculo de areas
 function calcularAreaCuadrado(){
 $area=10;
 echo "El area dentro de la funcion es: ".$area."<br>";
 }
 calcularAreaCuadrado();//llama a la función e imprime el area de dentro de la funcion
 echo "El area fuera de la funcion es: ".$area; // imprime el area de fuera de la funcion
 ?>