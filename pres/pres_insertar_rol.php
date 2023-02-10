<div class="mdl-tabs__panel" id="tabNewCategory">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle text-center tittles ocolor3">
					Nuevo Rol
				</div>
				<div class="full-width panel-content">
					<form action="../neg_dat/neg_dat_insertar_rol.php" method="POST">
						<div class="mdl-grid">
						    <div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Información de Rol</legend><br>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="number" id="NameCategory" name="cod_rol">
									<label class="mdl-textfield__label" for="NameCategory">Código</label>
									<span class="mdl-textfield__error">Código Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
							    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="descriptionCategory" name="rol">
									<label class="mdl-textfield__label" for="descriptionCategory">Nombre de Rol</label>
									<span class="mdl-textfield__error">Nombre Inválido</span>
								</div>
							</div>
						</div>
							<p class="text-center">
								<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCategory">
								    <i class="zmdi zmdi-plus"></i>
								</button>
								<div class="mdl-tooltip" for="btn-addCategory">Añadir Rol</div>
							</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>