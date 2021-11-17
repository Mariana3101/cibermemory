
<?php


if (!isset($_SESSION['Ingreso'])) {
  $_SESSION['Ingreso'] = 0;
  header('location:index.php?ruta=inicio');
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
                    
                    <br>
                    <div class="col-md-12 ">
                        <h5>
                        
                          <label class="labels">Nombre: <?php isset($_SESSION["nombre"]) ? print $_SESSION["nombre"] : ""; ?> </label></h5>
                    </div> 
                  <br>
                  <!--
                    <div class="col-md-12">
                        <h5>Apellido</h5>
                        <label class="labels">Perez</label>
                    </div> -->
  
                    <br>
                    <div class="col-md-12">
                        <h5>Fecha de nacimiento</h5>
                       
                        <label class="labels">Nombre: <?php
                       
                        isset($_SESSION["fecha_nac"]) ? print $_SESSION["fecha_nac"] : ""; ?> </label></h5>

                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Agregar fecha de nacimiento"/>
                    </div>
                <br>
                    <div class="col-md-12">
                        <h5>
                        <label class="labels">  <label class="labels">Email: <?php isset($_SESSION["email"]) ? print $_SESSION["email"] : ""; ?> </label></h5></label></h5>
                    </div>

                        <br>
                    <div class="col-md-12">
                        <h5>Numero de teléfono</h5>
                        <label class="labels">Nombre: <?php 
                        
                        ?> </label></h5>
                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Agregar numero de teléfono"/>
                        
                    </div>
                    <br>
                </div>
            </div>

          
           
        </div>
    </div>

</section>
</div>




