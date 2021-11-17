<?php
require_once "Controladores/RutasC.php";
require_once "Modelos/rutasM.php";
require_once "Controladores/adminC.php";
require_once "Modelos/adminM.php";
require_once "Controladores/recuerdoC.php";
require_once "Modelos/recuerdoM.php";
#require_once "Controladores/validacionesC.php";


$rutas = new RutasControlador();
$rutas->Plantilla();
