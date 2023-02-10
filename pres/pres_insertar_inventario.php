<?php

	include ("../neg_dat/conexion.php");

	$sql = "SELECT * FROM categoria";

?>

<!--Formulario de insertar productos/insumos en inventario-->

<div class="mdl-tabs__panel" id="tabNewProduct">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle color3 text-center tittles">
					Nuevo Producto o Insumo
				</div>
				<div class="full-width panel-content">
					<form action="../neg_dat/neg_dat_insertar_inventario.php" method="POST">
						<div class="mdl-grid">
							<div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Información Básica</legend><br>
							</div>
							
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="NameProduct" name="nom_insumo">
									<label class="mdl-textfield__label" for="NameProduct"><i class="fa-solid fa-italic"></i> Nombre</label>
									<span class="mdl-textfield__error">Nombre Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--10-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="number" id="StrockProduct" name="stock">
									<label class="mdl-textfield__label" for="StrockProduct"><i class="fa-solid fa-boxes-stacked"></i> Cantidad</label>
									<span class="mdl-textfield__error">Cantidad Inválida</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--10-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="number" id="PriceProduct" name="valor_insumo">
									<label class="mdl-textfield__label" for="PriceProduct"><i class="fa-solid fa-dollar-sign"></i> Precio</label>
									<span class="mdl-textfield__error"> Precio Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="fa-solid fa-tags"></i> Categoría</legend>
							</div>
							<div class="mdl-cell mdl-cell--12-col">
							    <div class="mdl-textfield mdl-js-textfield">
									<select class="mdl-textfield__input" name="fk_id_categoria">
										
										<option value="" disabled selected="">Seleccione una categoría</option>
										<?php
										
										if (!$result = $db -> query($sql)) {
											die ('Error en la consulta! [' . $db -> error . ']');
										}
							
										while ($row = $result -> fetch_assoc()) {
											$id_categoria = stripslashes($row["id_categoria"]);
                                        	$nom_categoria = stripslashes($row["nom_categoria"]);

											?>
											
											<option value="<?php echo $id_categoria; ?>"><?php echo $nom_categoria; ?></option>

											<?php
										}
										
										?>
									</select>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="fa-solid fa-truck-ramp-box"></i> &nbsp; Información del Proveedor</legend>
							</div>
							<div class="mdl-cell mdl-cell--6-col  mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield">
									<select class="mdl-textfield__input" name="nom_proveedor">
										<option value="" disabled selected>Seleccione un proveedor</option>
										<option>Calten.SAS</option>
										<option>PAVCO</option>
									</select>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" name="direccion_proveedor">
									<label class="mdl-textfield__label"><i class="fa-solid fa-location-dot"></i> Dirección</label>
									<span class="mdl-textfield__error">Dirección Inválida</span>
								</div>
							</div>
						</div>
						<p class="text-center mdl-cell mdl-cell--12-col">
							<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect color3 hover1" id="btn-addProduct" type="submit">
							    <i class="zmdi zmdi-plus fcolor1"></i>
							</button>
							<div class="mdl-tooltip" for="btn-addProduct">Añadir al Inventario</div>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>