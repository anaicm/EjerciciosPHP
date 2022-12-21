<?php
//código enviar archivos
copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
echo "Tu archivo se ha guardado en nuesto sitio web.";

$imagen = $_FILES['archivo']['name'];
echo "<p>Tu imagen es esta:<br><img src=\"$imagen\"></p>";
?>