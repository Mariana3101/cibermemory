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



    //Elimnar
    public function EliminarRecuerdo()
    {

        if (isset($_GET["idB"])) {

            $datosC = $_GET["idB"];
            $tablaBD = "recuerdo";
            $respuesta = RecuerdoM::EliminarRecuerdo($datosC, $tablaBD);
            if ($respuesta == "Bien") {
                /// exit(header("Location: /resultado_busqueda")); rompe
                // session_start();
                //$_SESSION['rta'] = $respuesta; //y esto??
                header("Location:index.php?ruta=busqueda_simple");
                //header("Refresh:0");
            } else {
                echo "error";
            }
        }
    }
}
