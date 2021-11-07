<?php


class AdminC
{

    public function IngresoC()
    {

        if (isset($_POST["demo-email"])) { //si el post viene con info
            //se crea una variable y se guardan los datos
            $datosC = array("email" => $_POST["demo-email"], 'pass' => $_POST["demo-pass"]);
            $tablaBD = 'usuario'; //se crea variable que contiene el nombre de la tabla
            //solicitamos respuesta al modelo, llamando a la funcion IngresoM
            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            if ($respuesta['email'] == $_POST['demo-email'] && $respuesta['contraseña'] == $_POST['demo-pass']) {

                //se crea variable de sesion
                session_start();
                $_SESSION['Ingreso'] = true;
                header('location:index.php?ruta=perfil');
            } else {
                echo 'Error al Ingresar';
            }
        }
    }
}
