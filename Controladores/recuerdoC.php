<?php


class RecuerdoC
{

    public function BusquedaSimpleC()
    {
        $datosC = array("inputText" => isset($_POST['busquedaInput']) ? $_POST['busquedaInput'] : '', "check1" => isset($_POST['check1']) ? $_POST['check1'] : '', "check2" => isset($_POST['check2']) ? $_POST['check2'] : '', "check3" => isset($_POST['check3']) ? $_POST['check3'] : '', "check4" => isset($_POST['check4']) ? $_POST['check4'] : '', "idUsuario" =>  $_SESSION['Usuario']);
        $tablaBD = 'recuerdo';

        $respuesta = RecuerdoM::BusquedaSimpleM($datosC, $tablaBD);

        if ($respuesta != []) {
           #session_start();
            $_SESSION['rta'] = $respuesta;
            header('Location:index.php?ruta=resultado_busqueda');
        }
    }



    //Elimnar
    public function EliminarRecuerdo()
    {
        
        if (isset($_GET["idB"])) {
            /*
            $datosC = $_GET["idB"];
            $tablaBD = "recuerdo";
            $respuesta = RecuerdoM::EliminarRecuerdo($datosC, $tablaBD);
            if ($respuesta == "Bien") {

                echo "<script>location.href='index.php?ruta=busqueda_simple';</script>";
            } else {
                echo "error";
            }*/

            $datosC = $_GET["idB"];
        var_dump($datosC);

        $pdo = ConexionBD::cBD()->prepare("DELETE FROM emoticon_recuerdo WHERE idRecuerdo=:idB");
        $pdo->bindParam(":idB", $datosC, PDO::PARAM_INT);
        if ($pdo->execute()) {
           
        } else {
            #return "Error";
            echo "Error 1";
        }
        #$pdo->close();
        $pdo = ConexionBD::cBD()->prepare("DELETE FROM recuerdo_usuario WHERE idRecuerdo=:idB");
        $pdo->bindParam(":idB", $datosC, PDO::PARAM_INT);
        if ($pdo->execute()) {
            
        } else {
            #return "Error";
            echo "Error 2";
        }
       # $pdo->close();
        $pdo = ConexionBD::cBD()->prepare("DELETE FROM recuerdo WHERE idRecuerdo=:idB");
        $pdo->bindParam(":idB", $datosC, PDO::PARAM_INT);
        if ($pdo->execute()) {
            echo "<script>location.href='index.php?ruta=busqueda_simple';</script>";
            return "Bien";
        } else {
            #return "Error";
            echo "Error 3";

        }
        #$pdo->close();

        }

    }
}