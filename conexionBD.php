<?php

class ConexionBD 
{
	
	static public function cBD()
	{
		$bd = new PDO("mysql:host=localhost;dbname=cyberMemoryBD","root","");
		
		return $bd;
		
		  // Verificamos la conexión a la Base de Datos MySQL 
		if (mysqli_connect_errno()) {
		  echo "Error al Conectar a la base de Datos: " . mysqli_connect_error();
		}

	}

}




 ?>