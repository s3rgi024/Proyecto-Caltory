
<div class="mdl-tabs__panel is-active" id="tabListCategory">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
			<div class="full-width panel mdl-shadow--2dp">
				<div class="full-width panel-tittle text-center tittles ocolor2">
					Lista de Categorías
				</div>
				<div class="full-width panel-content">
					<form action="#">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
							<label class="mdl-button mdl-js-button mdl-button--icon" for="searchCategory">
								<i class="zmdi zmdi-search"></i>
							</label>
							<div class="mdl-textfield__expandable-holder">
								<input class="mdl-textfield__input" type="text" id="searchCategory">
								<label class="mdl-textfield__label"></label>
							</div>
						</div>
					</form>
                    <?php
                        include "../neg_dat/neg_dat_consultar_categoria.php";
                    ?>
				</div>
				<footer>
					<br>
					<br>
					<br>
					<br>
				</footer>
			</div>		
		</div>
	</div>
</div>