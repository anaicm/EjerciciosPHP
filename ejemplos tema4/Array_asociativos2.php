<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Array asociativos 2</title>
</head>

<body>
<?php
$nombres=["Paco","Juanmi"];
$nombres[]="Belen";
$nombres[]="Juan";
foreach ($nombres as $nombre) {
  echo $nombre."<br>";
}
?>
</body>
</html>