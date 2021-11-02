<?php include "vistas/templates/header.php"; ?>

	<!-- Wrapper -->
    <div id="wrapper">
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<!--Tabs-->
					<nav class="nav">
						<a class="nav-link active" aria-current="page" href="#busqueda_simple">Busqueda simple</a>
						<a class="nav-link" href="#">Busqueda Avanzada</a>
						<a class="nav-link" href="#">Favoritos</a>
					
					</nav>
					<!--Fin Tabs-->
					<br>
					  
					<section id="busqueda_avanzada">
						<!--Buscador -->

						
						<div class="input-group input-group-sm mb-3">
							<span class="input-group-text border-0" id="search-addon">
								<i class="fas fa-search"></i>
							</span>
							<input type="search" name="" id="" placeholder="Buscar">
						</div>
						<!--Fin buscador -->
						<br>
						<br>
						<!--Select-->

						<form>
                            <!--Seleccionar tipo -->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Tipo</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
							<!--Seleccionar fecha -->
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Fecha</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            <!--Seleccionar importancia -->
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Importancia </label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <!--Seleccionar emociones -->
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Emociones </label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <!--Seleccionar Compañia -->
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Compañia</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <!--Seleccionar ubicación-->
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Seleccionar Ubicación</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <br>
                              <br>
                              <!--boton buscar -->
                              <div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Buscar" class="primary" /></li>
								
								</ul>
							</div>
                        </form>
						
						
					</section>
					<!--Fin select-->
				</div>
			</section>
		</div>		
			
	
			


<?php include "vistas/templates/footer.php"; ?>