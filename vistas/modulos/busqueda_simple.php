<!-- Wrapper -->
<?php include "vistas/templates/nav_buscar.php"; ?>

<section id="busqueda_simple">
	<!--Buscador simple-->

	<form method="post">
		<div class="input-group input-group-sm mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text border-0" id="search-addon">
					<i class="fas fa-search"></i>
				</span>
			</div>

			<input type="search" class="form-control" name="busquedaInput" id="" placeholder="Buscar">
		</div>
		<!--Fin buscador simplea-->
		<br>
		<br>
		<!--Checkbox-->

		<div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="check1" id="inlineCheckbox1" value="1">
				<label class="form-check-label" for="inlineCheckbox1">Información</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="check2" id="inlineCheckbox2" value="2">
				<label class="form-check-label" for="inlineCheckbox2">Buenos</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="check3" id="inlineCheckbox3" value="3">
				<label class="form-check-label" for="inlineCheckbox3">Malos</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" name="check4" id="inlineCheckbox4" value="4">
				<label class="form-check-label" for="inlineCheckbox4">Neutros</label>
			</div>

			<br>
			<br>

			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Buscar" class="primary" /></li>

				</ul>
			</div>

		</div>
	</form>

</section>
<!--Fin checkbox-->
</div>
</section>
</div>



<?php

$busqueda = new RecuerdoC();
$busqueda->BusquedaSimpleC();

?>