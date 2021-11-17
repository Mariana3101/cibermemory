<?php


class RecuerdoC
{

    public function BusquedaSimpleC()
    {
        $datosC = array("inputText" => isset($_POST['busquedaInput']) ? $_POST['busquedaInput'] : '', "check1" => isset($_POST['check1']) ? $_POST['check1'] : '', "check2" => isset($_POST['check2']) ? $_POST['check2'] : '', "check3" => isset($_POST['check3']) ? $_POST['check3'] : '', "check4" => isset($_POST['check4']) ? $_POST['check4'] : '', "idUsuario" =>  $_SESSION['Usuario']);
        $tablaBD = 'recuerdo';

        $respuesta = RecuerdoM::BusquedaSimpleM($datosC, $tablaBD);

        if ($respuesta != []) {

            $emoticones = array();
            foreach ($respuesta as $key => $value) {

                $datosC = array("idRecuerdo" => $value["idRecuerdo"]);
                $respuesta2 = RecuerdoM::BusquedaEmoticonM($datosC);
                array_push($emoticones, $respuesta2);
            }
            //var_dump($emoticones);

            session_start();
            $_SESSION['rta'] = $respuesta;
            $_SESSION['emoticones'] = $emoticones;
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

                echo "<script>location.href='index.php?ruta=busqueda_simple';</script>";
            } else {
                echo "error";
            }
        }
    }
}
