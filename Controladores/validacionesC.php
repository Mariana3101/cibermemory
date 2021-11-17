<?php

class ValidacionesC
{
    public function VerificarUsuario()
    {
        
        if(isset($_POST['demo-name'])){
            $datosC = array("nombre" => $_POST["demo-name"], 'email' => $_POST["demo-email"]);
            $tablaBD = 'usuario'; //se crea variable que contiene el nombre de la tabla
            //solicitamos respuesta al modelo, llamando a la funcion IngresoM
            $respuesta = AdminM::VerificarUsuario($datosC, $tablaBD);

             if (($respuesta['nombre'] == $_POST['demo-name'] && $respuesta['email'] 
             == $_POST['demo-email'])){
                echo 'El usuario ya esta registrado';
             }

        }
    }




}