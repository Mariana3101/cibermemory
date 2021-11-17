<?php

require_once "conexionBD.php";

class AdminM extends conexionBD
{
    static public function IngresoM($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT email, contraseña from $tablaBD   WHERE  email = :email  AND contraseña = :pass");
        $pdo->bindParam(':email', $datosC['email'], PDO::PARAM_STR);
        $pdo->bindParam(':pass', $datosC['pass'], PDO::PARAM_STR);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();
    }
   
    static public function VerificarUsuario ($datosC, $tablaBD)
    {
        $pdo = ConexionBD::cBD()->prepare("SELECT nombre, email from $tablaBD   WHERE  nombre = :nombre  AND email = :email");
        $pdo->bindParam(':nombre', $datosC['nombre'], PDO::PARAM_STR);
        $pdo->bindParam(':email', $datosC['email'], PDO::PARAM_STR);
        $pdo->execute();
        return $pdo->fetch();
        $pdo->close();
    }
    
    static public function PerfilM($tablaBD)
    {
     /*
        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, email from $tablaBD WHERE id = ?");
        $stm = $this->$pdo;
        

        $stm->execute(array(id));

        $r = $stm->fetch(PDO::FETCH_OBJ);

        $alm = new usuario();

        $alm->__SET('id', $r->id);

        $alm->__SET('nombre', $r->nombre);

        $alm->__SET('email', $r->email);

          

        return $alm;
*/
	}

    
}
