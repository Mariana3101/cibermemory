<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!-- Wrapper -->
<div id="wrapper">

<!-- registrar -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
    <div class="inner">
         <h1>CiberMemory</h1>

            <section> <!--action="index.php?ruta=perfil"-->
                <h2>Registrar</h2>
                    <form method="post" >
                        <div class="row gtr-uniform">
                            <div class="col-12">
                                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nombre" required />
                            </div>
                            <div class="col-12">
                                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" required/>
                            </div>
                            <div class="col-6 col-12">
                                <input type="password" name="demo-pass" id="demo-pass" value="" placeholder="Contraseña" required />
                            </div>

                            <!--Aca va la huella digital-->
                            <div>
                                <h2>Usar huella dactilar</h2>
                                aca va la huella para la version movil 
                            </div>
                            <!--Fin huella digital -->
                            <br>
                            <div class="col-12">
                            
                                <ul class="actions">
                                    <li><input type="submit" name="registrar" value="Confirmar" class="primary" /></li>
                                    
                                </ul>
                                
                            </div>
                            <br>    
                        </div>
                    </form>
            </section>

                
    </div>
</section>
</div>


<?php

$registrar= new AdminC();
$registrar ->RegistrarC(); //llamo a la funcion RegistrarC

#$verificarUsuario = new ValidacionesC();
#$verificarUsuario -> VerificarUsuario();

?>