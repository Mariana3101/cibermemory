<?php


class RecuerdoC
{

    public function BusquedaSimpleC()
    {
        //var_dump($_POST);
        $respuesta = [];
        $datosC = array("inputText" => isset($_POST['busquedaInput']) ? $_POST['busquedaInput'] : '', "check2" => isset($_POST['check2']) ? $_POST['check2'] : '');
        $tablaBD = 'recuerdo';

        $respuesta = RecuerdoM::BusquedaSimpleM($datosC, $tablaBD);

        if ($respuesta != []) {
            header("location:resultado_busqueda.php?$respuesta=$respuesta");
        }
    }
}
