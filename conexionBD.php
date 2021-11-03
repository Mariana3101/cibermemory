<?php

class ConexionBD 
{
	
	static public function cBD()
	{
		$bd = new PDO("mysql:host=localhost;dbname=cybermemorybd","root","");
		return $bd;
		

	}

}




 ?>