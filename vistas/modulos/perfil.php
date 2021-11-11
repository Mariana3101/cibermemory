
<?php
/*
session_start();
if ( !$_SESSION['Ingreso']) {
    header('location:index.php?ruta=inicio');
    exit();
}
*/
#session_start();
if (!isset($_SESSION['Ingreso'])) {
  $_SESSION['Ingreso'] = 0;
} else {
  $_SESSION['Ingreso']++;
}

?>
	<!-- Wrapper -->
    <div id="wrapper">

<!-- registrar -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
    <div class="inner">
         <h2 >Información Personal</h2>
         <br>
         <div class="row">
            <div class="col-md-3 border-right">
               <!--Falta icono para modificar el avatar -->
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            </div>

            <div class="col-md-4">
                <div class="p-3 py-5 gtr-uniform">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"></div><br>
                    <br>
                        <div class="col-md-12 ">
                            <h5>Nombre</h5>
                            <label class="labels">Jose</label>
                        </div> 
                  <br>
                    <div class="col-md-12">
                        <h5>Apellido</h5>
                        <label class="labels">Perez</label>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <h5>Fecha de nacimiento</h5>
                        
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Agregar fecha de nacimiento"/>
                    </div>
                <br>
                    <div class="col-md-12">
                        <h5>Correo electrónico</h5>
                        <label class="labels">joseperez@gmail.com</label>
                    </div>

                        <br>
                    <div class="col-md-12">
                        <h5>Numero de teléfono</h5>
                       
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Agregar numero de teléfono"/>
                        
                    </div>
                    <!--Falta icono de editar y borrar -->
                    <br>
                </div>
            </div>
        </div>
    </div>

</section>
</div>



