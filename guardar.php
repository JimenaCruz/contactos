 <?php
 //conectamos con el servidor
		$conectar=@mysql_connect('localhost','root','')
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
		//recuperamos variables
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$mensaje=$_POST['mensaje'];
		//sentencia de sql
		$sql="INSERT INTO datos VALUES ('$nombre',
										'$correo',
										'$mensaje')";
			//ejecutamos la sentencia de sql
		$ejecutar=mysql_query($sql);
		//verificamos la sentencia de sql
		if(!$ejecutar)
		{
			echo "Hubo Algun Error";

		}
		else {
			echo"Datos Guardados Correctamente <br><a href='index.html'>Volver</a>";

		}
		?>