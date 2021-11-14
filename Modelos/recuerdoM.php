<?php

require_once "conexionBD.php";

class RecuerdoM extends conexionBD
{
    static public function BusquedaSimpleM($datosC, $tablaBD)
    {

        /* SELECT X(coordenadas) AS Latitude, Y(coordenadas) AS Longitude, idRecuerdo, idUsuario, titulo, fecha, hora_desde, 
        hora_hasta, idTipo, ubicacion, compañia, comentarios, informacion, imagen, emoticon from $tablaBD 
        INNER JOIN emoticon_recuerdo ON recuerdo.idRecuerdo = emoticon_recuerdo.idRecuerdo
        INNER JOIN emoticon On emoticon_recuerdo.idEmoticon = emoticon.idEmoticon
        WHERE 
        titulo like :inputText OR idTipo = :check1 OR idTipo = :check2 OR idTipo = :check3 OR idTipo = :check4 AND idUsuario =:idUsuario 
        " */

        //$pdo = ConexionBD::cBD()->prepare("SELECT * from $tablaBD WHERE (titulo like :inputText OR idTipo = :check1 OR idTipo = :check2 OR idTipo = :check3 OR idTipo = :check4) AND idUsuario =:idUsuario");
        $pdo = ConexionBD::cBD()->prepare("SELECT X(r.coordenadas) AS Latitude, Y(r.coordenadas) AS Longitude, ru.idUsuario, r.titulo, r.fecha, r.hora_desde, 
        r.hora_hasta, r.idTipo, r.ubicacion, r.compañia, r.comentarios, r.informacion, r.imagen, r.idRecuerdo from $tablaBD as r
        INNER JOIN recuerdo_usuario as ru On
        r.idRecuerdo = ru.idRecuerdo
        WHERE 
        r.titulo like :inputText OR r.idTipo = :check1 OR r.idTipo = :check2 OR r.idTipo = :check3 OR r.idTipo = :check4 AND ru.idUsuario =:idUsuario 
        ");

        $pdo->bindParam(':inputText', $datosC['inputText'], PDO::PARAM_STR);
        $pdo->bindParam(':check1', $datosC['check1'], PDO::PARAM_INT);
        $pdo->bindParam(':check2', $datosC['check2'], PDO::PARAM_INT);
        $pdo->bindParam(':check3', $datosC['check3'], PDO::PARAM_INT);
        $pdo->bindParam(':check4', $datosC['check4'], PDO::PARAM_INT);
        $pdo->bindParam(':idUsuario', $datosC['idUsuario'], PDO::PARAM_INT);
        $pdo->execute();
        return $pdo->fetchAll();
        $pdo->close();
    }



    //Eliminar
    static public function EliminarRecuerdo($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE idRecuerdo=:idB");
        $pdo->bindParam(":idB", $datosC, PDO::PARAM_INT);
        if ($pdo->execute()) {
            return "Bien";
        } else {
            return "Error";
        }
        $pdo->close();
    }
}
