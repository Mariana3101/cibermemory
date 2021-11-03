<?php

class Modelo{
    static public function RutasModelo($rutas){
        if($rutas == "inicio" || $rutas == "busqueda_simple" || $rutas == "mensajes"|| 
            $rutas== "perfil" || $rutas == "registrar" || $rutas == "iniciar_sesion"
            || $rutas == "busqueda_avanzada" || $rutas == "favoritos" || $rutas == "crear"
            || $rutas == "detalle" || $rutas == "detalle2" || $rutas == "editar" 
            || $rutas == "resultado_busqueda" || $rutas == "error" || $rutas == "buscar2")
        {

           $pagina = "vistas/modulos/".$rutas.".php";
            
        }else if($rutas == "index"){
            $pagina = "vistas/modulos/inicio.php";
        }else{
            $pagina = "vistas/modulos/inicio.php";
        }
        return $pagina;
    }
}

?>