>?php
$conectar=@mysql_connect('localhost','root','');
if(!$conectar)
{
	echo"No se pudo conectar con el Servidor"; 
}
else{
	$base=mysql_select_db('prueba'); 
	if (!$base)
	{
		echo"No se encontró la base de datos";
	}
}
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$sql="INSERT INTO datos VALUES ('$nombre',
								'$correo',
								'$mensaje')";

$ejecutar=mysql_query($sql);

if(!$ejecutar)
{
	echo"Hubo Algun Error";

}
else {
	echo"Datos Guardados Correctamente <br><a href='index.html'>Volver</a>";

}
?>