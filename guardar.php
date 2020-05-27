 <?php
 class Conexion extends mysqli// Conexion:mysqli 
        {
            

            public function __construct()
            {
            $servidor= "localhost";
            $database= "prueba"; 
            $usuario="root";
            $password="";
            parent::__construct($servidor, $usuario, $password, $basadatos);            
             $this->connect_errno ? die('Error en la conexion')  : $error-"Conectado a ".$basadatos;
             echo $error;
             unset($error);


             }
        }





		?>