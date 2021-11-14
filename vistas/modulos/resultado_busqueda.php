<!-- Wrapper -->
<?php include "vistas/templates/nav_buscar.php"; ?>
<section id="intro" class="wrapper style2 spotlights">
	<!--imagen 1-->

	<?php


	if ($_SESSION['rta']) {



		foreach ($_SESSION['rta'] as $key => $value) {
			// and print out the values
			//echo $value['titulo'];



			echo '<section>
	

				<a href="#" class="image"><img src="data:image/jpeg;base64,' . base64_encode($value['imagen']) . ' " alt="" data-position="center center"  width="300" height="300" /></a>
				<div class="content">
					<div class="dropdown  d-md-flex justify-content-md-end">
						<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
								<path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
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
		
						<h4>
		
					' . $value['titulo'] . '
						</h4>
						<p>
						Fecha: ' . $value['fecha'] . ' 
							
						<p>
						Horario: ' . date('g:i A', strtotime($value['hora_desde'])) . ' a ' . date('g:i A', strtotime($value['hora_hasta'])) . '
						
						<p>
						Ubicacion: ' . $value['Latitude']  . '
						</p>


						<iframe width="100%" height="500" src="https://maps.google.com/maps?q= ' . $value['Latitude']  . ', ' . $value['Longitude']  . ' &output=embed"></iframe>
							<p>
							' . $value['ubicacion'] . ' 
							</p>

							<p>
							Compañia: ' . $value['compañia']  . '
							</p>
							<p>
							Comentario: ' . $value['comentarios']  . '
							</p>

							<?php foreach (' . $_SESSION['rta'] . '  as $key => $v) {
							   echo "	' . $v['emoticon']   . '"
							}; ?>
	
						

					</div>
				</div>
			</section>
			
			
		
			';
		}
	}


	?>


</section>



</div>