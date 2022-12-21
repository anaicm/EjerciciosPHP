<?php 
$f_conv = $_POST["conv"];
$f_cantidad = $_POST["cantidad"];

echo "Son "; 
if ($f_conv==1)        
{ 
	echo $f_cantidad/166.386; 
	echo " euros";        }
else        
{        
	echo $f_cantidad/180.386;        
	echo " dolares";        
} 
?>