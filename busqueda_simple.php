<?php include "vistas/templates/header.php"; ?>

	<!-- Wrapper -->
    <div id="wrapper">
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<!--Tabs-->
					<nav class="nav">
						<a class="nav-link active" aria-current="page" href="#busqueda_simple">Busqueda simple</a>
						<a class="nav-link" href="#busqueda_avanzada">Busqueda Avanzada</a>
						<a class="nav-link" href="#">Favoritos</a>
					
					</nav>
					<!--Fin Tabs-->
					<br>
					  
					<section id="busqueda_simple">
						<!--Buscador simple-->

						
						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text border-0" id="search-addon">
								<i class="fas fa-search"></i>
							</span>
							<input type="search" name="" id="" placeholder="Buscar">
						</div>
						<!--Fin buscador simplea-->
						<br>
						<br>
						<!--Checkbox-->

						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Información</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Buenos</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
								<label class="form-check-label" for="inlineCheckbox3">Malos</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
								<label class="form-check-label" for="inlineCheckbox4">Neutros</label>
							</div>

							<br>
							<br>
							<!--boton buscar
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Buscar" class="primary" /></li>
								
								</ul>
							</div>-->
							
						</div>
						
						
					</section>
					<!--Fin checkbox-->
				</div>
			</section>
		</div>		
			


<?php include "vistas/templates/footer.php"; ?>