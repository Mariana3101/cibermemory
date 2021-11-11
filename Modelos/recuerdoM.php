<?php

require_once "conexionBD.php";

class RecuerdoM extends conexionBD
{
    static public function BusquedaSimpleM($datosC, $tablaBD)
    {

        //'.$field.' = :value'
        $pdo = ConexionBD::cBD()->prepare("SELECT * from $tablaBD WHERE titulo like CONCAT('%', :inputText, '%') OR idTipo = :check2 ");
        $pdo->bindParam(':inputText', $datosC['inputText'], PDO::PARAM_STR);
        $pdo->bindParam(':check2', $datosC['check2'], PDO::PARAM_INT);
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();
    }
}
