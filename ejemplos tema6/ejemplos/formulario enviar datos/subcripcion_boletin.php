<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subcripción boletin</title>
<style type="text/css">
h1{text-align:center;}
td{padding:0.2em 2em;}
</style>
</head>

<body>
<h1>Subcripción electrónica a nuestro boletin</h1>
<p> Nota: este es un formulario de ejemplo en el que los datos escritos se trasladan a otra página</p>
<form method="post" action="codigo_comprobar_formulario.php">
	<p>
    	Nombre: <input type="text" name="nombre" />
    	Apellidos: <input type="text" name="apellidos" size="40"/>
    	Email: <input type="text" name="email" size="35"/>
	</p>
    <p>
    	Contraseña<input type="password" name="contras" />
    </p>
    <br />
    <table>
    	<tbody>
        	<tr>
            	<td> Sexo: <br />
                	<input type="radio" name="sexo" value="V" />Varon<br />
                	<input type="radio" name="sexo" value="M" />Mujer<br />
                </td>
                <td> Nivel de estudios: <br />
                	<input type="radio" name="estudios" value="elemental" checked="checked" />Certificado escolar<br />
                	<input type="radio" name="estudios" value="basico" checked="checked" />Gaduado Eso<br />
                    <input type="radio" name="estudios" value="bachiller" checked="checked" />bachiller-Formación profesional<br />
                    <input type="radio" name="estudios" value="diplomado" checked="checked" />Diplomado<br />
                    <input type="radio" name="estudios" value="licenciado" checked="checked" />Licenciado o Doctorado<br />
                </td>
            </tr>
        </tbody> 
    </table>
    <p>Día de la semana que interesa recibirlo: </p>
    <select name="dia">
    	<option>Día de la semana:</option>
    	<option value="lunes">Lunes</option>
        <option value="martes">Martes</option>
        <option value="Miercoles">Miercoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
    </select> 
    <p> Su opinión:<br />
    	<textarea name="comentario" rows="5" cols="50">Comentario </textarea>
    </p>
    <p>
    	<input type="submit" value="comprobar el formulario" />
        <input type="reset" value="borrar todo" />
    </p>

</form>
</body>
</html>