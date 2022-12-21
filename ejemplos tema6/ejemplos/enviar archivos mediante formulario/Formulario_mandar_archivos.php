<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario para mandar archivos</title>
</head>

<body>
<h1>Inserta el archivo que quieres enviar</h1>
<form action="tu_archivo.php" method="post" name="tu_archivo">
	<p>Manda tu archivo:
    	<input type="file" name="archivo" />
	</p>
    <p>
    	<input type="submit" value="mandar archivo" />
	</p>
</form>
</body>
</html>