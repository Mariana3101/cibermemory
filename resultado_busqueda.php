<?php include "vistas/templates/header.php"; ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- -->
<section  id="intro" class="wrapper style1  fade-up">
            <!--Tabs-->
    <nav class="nav justify-content-end">
        <a class="nav-link active" aria-current="page" href="#busqueda_simple">Busqueda simple</a>
        <a class="nav-link" href="#">Busqueda Avanzada</a>
        <a class="nav-link" href="#">Favoritos</a>
    
    </nav>
    <!--Fin Tabs-->
    <br>
</section>
<section id="intro" class="wrapper style2 spotlights">
    <!--imagen 1-->
    <section >
        

            <a href="#" class="image"><img src="images/desayuno.png" alt="" data-position="center center"data-position="center center" /></a>
        <div class="content">
            
            <div class="dropdown  d-md-flex justify-content-md-end">
                <button class="btn dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg>
                </button>
            
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Renderizar</a></li>
                  <li><a class="dropdown-item" href="#">Borrar</a></li>
                  <li><a class="dropdown-item" href="#">Agregar a Favoritos</a></li>
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Cambiar Imagen </a></li>
                </ul>
            </div>
            <br>
            <div class="inner">
                
                <h2 class="card-title">
                    Desayuno con mamá
                </h2>	
                <p class="card-text">
                    21/09/2021 de 9:00  a 9:30
                </p>
                    
                    <!-- faltan emoticones-->
                <p class="card-text">
                    Mamá
                </p>
                    
                
            </div>
        </div>
    </section>
    <!----->
    <!--Imagen 2-->
    <section>
        
        <a href="#" class="image"><img src="images/casa.png" alt="" data-position="center center"data-position="center center" /></a>
        <div class="content">

            <div class="dropdown  d-md-flex justify-content-md-end">
                <button class="btn dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                      </svg>
                </button>
            
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Renderizar</a></li>
                  <li><a class="dropdown-item" href="#">Borrar</a></li>
                  <li><a class="dropdown-item" href="#">Agregar a Favoritos</a></li>
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Cambiar Imagen </a></li>
                </ul>
            </div>
            <br>
            <div class="inner">
                <h2 class="card-title">
                    Casa de Jorge 
                </h2>	
                <p class="card-text"> 
                    21/09/2021 de 9:00  a 9:30
                </p>
                    
                    <!-- faltan emoticones-->
                <p class="card-text">
                    Jorge, Mario, Mama
                    
                    
            </div>
        </div>
    </section>
    <!----Fin imagen 2----->
</section>



</div>



<?php include "vistas/templates/footer.php"; ?>