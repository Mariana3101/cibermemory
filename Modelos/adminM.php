<?php

require_once "conexionBD.php";

class AdminM extends conexionBD
{
    static public function IngresoM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT email, contraseña, idUsuario from $tablaBD WHERE  email = :email AND contraseña = :pass");
        $pdo->bindParam(':email', $datosC['email'], PDO::PARAM_STR);
        $pdo->bindParam(':pass', $datosC['pass'], PDO::PARAM_STR);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();
    }
}
