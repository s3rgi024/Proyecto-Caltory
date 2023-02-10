<div class="mdl-tabs__panel is-active" id="tabListProducts">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
			<form action="#">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
				    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
						<i class="zmdi zmdi-search"></i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="searchProduct">
						<label class="mdl-textfield__label"></label>
					</div>
				</div>
			</form>
			<nav class="full-width menu-categories">
				<ul class="list-unstyle text-center">
					<?php include "pres_consultar_categorias_menu.php"; ?>
				</ul>
			</nav>
			<div class="full-width text-center" style="padding: 30px 0;">
				<?php
                
                    include "../neg_dat/neg_dat_filtrar_categorias.php";

                ?>
			</div>
		</div>
	</div>
</div>