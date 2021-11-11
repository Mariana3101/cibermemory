

		<!-- Wrapper -->
        <div id="wrapper">

<!-- registrar -->
<section id="" class="wrapper style1 fullscreen fade-up">
    <div class="inner">
        <h1>CiberMemory</h1>

        <section>
            <h2>Iniciar Sesion</h2>
            <form method="post" >
                <div class="row gtr-uniform">
                    <div class="col-12">
                        <input type="email" name="demo-email" id="demo-name" value="" placeholder="Email" required />
                    </div>
                    <div class="col-6 col-12">
                        <input type="password" name="demo-pass" id="demo-email" value="" placeholder="Contraseña" required />
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
                            <li><input type="submit" value="Confirmar" class="primary" /></li>
                            
                        </ul>
                        <small>¿Es la primera vez que ingresas?</small><a href="index.php?ruta=registrar"> REGISTRATE</a>
                    </div>
                </div>
            </form>
        </section>

        
    </div>
</section>

</div>

<?php

$ingreso= new AdminC();
$ingreso ->IngresoC(); //llamo a la funcion IngresoC

?>