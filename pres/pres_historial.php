<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Historial</title>
</head>
<body>
    <?php
    
    include "barra_lateral.php";
    include "barra_superior.php";
    
    ?>

<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<div class="table-responsive">
					<?php
						include "../neg_dat/neg_dat_consultar_historial.php";
					?>
				</div>
			</div>
		</div>
</body>