<?php
//----------------Código crear cookie------------------------
if(isset($_GET["enviar"])){//si pulsa enviar crea la cookie
    setcookie("nom_cookie",$_GET["nombre_usu"],time()+20000);                                         //clave nombre, valor que entra por formulario y tiempo de duracion 
    header("location:mostrar_cookie.php");                                                            //redirige a la página
}


//----------------Código mostrar cookie------------------------
function mostrar_cookie(){
    if(isset($_COOKIE["nom_cookie"])){                                                      //si la cookie ha sido creada
        echo $_COOKIE["nom_cookie"];                                                        //muestrala por pantalla
    }
}
//----------------Código borrar cookie------------------------
if(isset($_GET["borrar"]) && isset($_COOKIE["nom_cookie"])){                                    //si pulsa el boton borrar y la cookie esta creada
    setcookie("nom_cookie",$_COOKIE[""],time()-1);                                              //borra la cookie
    header("location:crear_cookie.html");
}
?>