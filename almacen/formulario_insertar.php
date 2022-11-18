<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario insertar</title>
</head>

<body>

<h1>Registro de artículos</h1>
<form name='form1' method='get' action='insertar_registro.php'>
<table border="0" align="center">
    <tr>
        <td>Código Artículo</td>
        <td><label for='txt_CodigoArticulo'</label>
        <input type='text' name='txt_CodigoArticulo' id='txt_CodigoArticulo'></td>
    </tr>
    <tr>
        <td>Sección</td>
        <td><label for='txt_Seccion'</label>
        <input type='text' name='txt_Seccion' id='txt_Seccion'></td>
    </tr>
    <tr>
        <td>Nombre Artículo</td>
        <td><label for='txt_NombreArticulo'</label>
        <input type='text' name='txt_NombreArticulo' id='txt_NombreArticulo'></td>
    </tr>
    <tr>
        <td>Precio</td>
        <td><label for='txt_Precio'</label>
        <input type='text' name='txt_Precio' id='txt_Precio'></td>
    </tr>
    <tr>
        <td>Fecha</td>
        <td><label for='txt_Fecha'</label>
        <input type='text' name='txt_Fecha' id='txt_Fecha'></td>
    </tr>
    <tr>
        <td>Importado</td>
        <td><label for='txt_Importado'</label>
        <input type='text' name='txt_Importado' id='txt_Importado'></td>
    </tr>
    <tr>
        <td>Pais de origen</td>
        <td><label for='txt_PaisOrigen'</label>
        <input type='text' name='txt_PaisOrigen' id='txt_PaisOrigen'></td>
    </tr>
    <tr>
    	<td align="center"><input type='submit' name='Enviar' id='Enviar' value='Enviar'></td>
		<td align="center"><input type='reset' name='Borrar' id='Borrar' value='Borrar'></td>
    </tr>
</table>

</form>
</body>
</html>