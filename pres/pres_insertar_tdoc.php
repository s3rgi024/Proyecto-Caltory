<div class="mdl-tabs__panel" id="tabNewPayment">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
    		<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle ocolor1 text-center tittles">
					Nuevo Tipo de Documento
				</div>
				<div class="full-width panel-content">
				    <form action="../neg_dat/neg_dat_insertar_tdoc.php" method="POST">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Información Básica</legend><br>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="NamePayment" name="nom_tdoc">
                                    <label class="mdl-textfield__label" for="NamePayment">Abreviatura de Tipo de Documento</label>
                                    <span class="mdl-textfield__error">Abreviatura Inválida</span>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="descriptionPayment" name="desc_tdoc">
                                    <label class="mdl-textfield__label" for="descriptionPayment">Descripción</label>
                                    <span class="mdl-textfield__error">Descripción Inválida</span>
                                </div>
                            </div>
                        </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect ocolor1 hover1" id="btn-addPayment">
                                    <i class="zmdi zmdi-plus fcolor1"></i>
                                </button>
                                <div class="mdl-tooltip" for="btn-addPayment">Añadir Tipo de Documento</div>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>