<?php

require_once "conexionBD.php";

class RecuerdoM extends conexionBD
{
    static public function BusquedaSimpleM($datosC, $tablaBD)
    {

        //$pdo = ConexionBD::cBD()->prepare("SELECT * from $tablaBD WHERE (titulo like :inputText OR idTipo = :check1 OR idTipo = :check2 OR idTipo = :check3 OR idTipo = :check4) AND idUsuario =:idUsuario");
        $pdo = ConexionBD::cBD()->prepare("SELECT * from $tablaBD WHERE titulo like :inputText OR idTipo = :check1 OR idTipo = :check2 OR idTipo = :check3 OR idTipo = :check4 AND idUsuario =:idUsuario");

        $pdo->bindParam(':inputText', $datosC['inputText'], PDO::PARAM_STR);
        $pdo->bindParam(':check1', $datosC['check1'], PDO::PARAM_INT);
        $pdo->bindParam(':check2', $datosC['check2'], PDO::PARAM_INT);
        $pdo->bindParam(':check3', $datosC['check3'], PDO::PARAM_INT);
        $pdo->bindParam(':check4', $datosC['check4'], PDO::PARAM_INT);
        $pdo->bindParam(':idUsuario', $datosC['idUsuario'], PDO::PARAM_INT);
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();

        //SELECT * from recuerdo where titulo like ''or idTipo = '1';
    }
}
