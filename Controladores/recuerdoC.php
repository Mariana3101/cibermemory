<?php


class RecuerdoC
{

    public function BusquedaSimpleC()
    {

        session_start();
        //  $respuesta = [];
        var_dump($_SESSION['Usuario']);
        $datosC = array("inputText" => isset($_POST['busquedaInput']) ? $_POST['busquedaInput'] : '', "check1" => isset($_POST['check1']) ? $_POST['check1'] : '', "check2" => isset($_POST['check2']) ? $_POST['check2'] : '', "check3" => isset($_POST['check3']) ? $_POST['check3'] : '', "check4" => isset($_POST['check4']) ? $_POST['check4'] : '', "idUsuario" =>  $_SESSION['Usuario']);
        $tablaBD = 'recuerdo';

        $respuesta = RecuerdoM::BusquedaSimpleM($datosC, $tablaBD);

        // var_dump($respuesta);
        /**
         * guardar en la session el id del usuario para traer su recuerdo
         */

        if ($respuesta != []) {
            session_start();
            $_SESSION['rta'] = $respuesta;
            header('Location:index.php?ruta=resultado_busqueda');
        }
    }
}
