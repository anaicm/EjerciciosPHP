<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario insertar coches</title>
</head>

<body>

<h1>Registro de vehículos</h1>
<form name='form1' method='get' action='codigo_insertar.php'>
<table border="0" align="center">
    <tr>
        <td>Matricula</td>
        <td><label for='txt_matricula'</label>
        <input type='text' name='txt_matricula' id='txt_matricula'></td>
    </tr>
    <tr>
        <td>Marca</td>
        <td><label for='txt_marca'</label>
        <input type='text' name='txt_marca' id='txt_marca'></td>
    </tr>
    <tr>
        <td>Modelo</td>
        <td><label for='txt_modelo'</label>
        <input type='text' name='txt_modelo' id='txt_modelo'></td>
    </tr>
    <tr>
        <td>Tipo de vehículo</td>
        <td><label for='txt_tipoVehiculo'</label>
        <input type='text' name='txt_tipoVehiculo' id='txt_tipoVehiculo'></td>
    </tr>
    <tr>
        <td>NIF</td>
        <td><label for='txt_nif'</label>
        <input type='text' name='txt_nif' id='txt_nif'></td>
    </tr>

    <tr>
    	<td align="center"><input type='submit' name='Enviar' id='Enviar' value='Enviar'></td>
		<td align="center"><input type='reset' name='Borrar' id='Borrar' value='Borrar'></td>
    </tr>
</table>

</form>
</body>
</html>