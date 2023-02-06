<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$contra_entrar="1234";
$usu_entrar="Carmen";

$el_usuario=$_GET['usuario'];
$la_contra=$_GET['contra'];

if ($el_usuario==$usu_entrar && $la_contra==$contra_entrar) {
  echo 'autorizado';
} else {
  echo 'fallo';
}



?>