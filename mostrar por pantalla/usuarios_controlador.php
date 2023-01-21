<?php
require_once("busqueda_usuarios.php");
$usuario=new Devuelve_usuarios();
$array_usuarios=$usuario->get_usuario();
require_once("usuarios_view.php");

?>