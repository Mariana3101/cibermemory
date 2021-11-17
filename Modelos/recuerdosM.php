<?php


class RecuerdosM extends ConexionBD
{
    // Registrar recuerdo 
    static public function RegistrarR($datos,$tablaBD)
    {
       
		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(titulo,fecha, hora-inicio,hora_hasta,idTipo,compañia, ubicacion,comentarios)
                                        VALUES(:titulo,:fecha,:hora-inicio,:hora_hasta,:idTipo,:compañia,:ubicacion,:comentarios)");


		$pdo ->bindParam(":titulo", $datos["titulo"],PDO::PARAM_STR);
		$pdo ->bindParam(":fecha", $datos["fecha"],PDO::PARAM_STR);
		$pdo ->bindParam(":hora-inicio", $datos["hora-inicio"],PDO::PARAM_STR);
		$pdo ->bindParam(":hora_hasta", $datos["hora_hasta"],PDO::PARAM_STR);
		$pdo ->bindParam(":idTipo", $datos["idTipo"],PDO::PARAM_STR);
        $pdo ->bindParam(":compañia", $datos["compañia"],PDO::PARAM_STR);
        $pdo ->bindParam(":ubicacion", $datos["ubicacion"],PDO::PARAM_STR);

        $pdo ->bindParam(":comentarios", $datos["comentarios"],PDO::PARAM_STR);




		if ($pdo -> execute()){
			return "Bien";
		}else{
			return "Error";
		}

		$pdo ->close();
 
    }
}




?>