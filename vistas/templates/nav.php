  	<!-- Sidebar -->

  	<section id="sidebar">
  	    <div class="inner">
  	        <nav>
  	            <ul>
  	                <!-- 
                        <li><a href="inicio.php">Inicio</a></li>-->
  	                <li><a href="index.php?ruta=inicio">Inicio</a></li>

  	                <li><a href="index.php?ruta=busqueda_simple">Buscar</a></li>
  	                <!--Agregar icono buscar-->
  	                <li><a href="index.php?ruta=mensajes">Mensajes</a></li>
  	                <li><a href="index.php?ruta=perfil">Perfil</a></li>
  	                <li><a href="index.php?ruta=registrar">Registrar</a></li>
	  				<li><a href="index.php?ruta=iniciar_sesion">Ingresar</a></li>

  	                <?php
                        session_start();
                        if (isset($_SESSION['Ingreso'])) {

                            echo '<li><a href="index.php?ruta=salir">Salir</a></li>';
                        } else {

                            echo '<li><a href="index.php?ruta=iniciar_sesion">Ingresar</a></li>';
                        } ?>


  	            </ul>
  	        </nav>
  	    </div>
  	</section>

