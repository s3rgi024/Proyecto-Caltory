<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tipos de Documento</title>
</head>
<body>
    <?php
    
    include "barra_lateral.php";
    include "barra_superior.php";
    
    ?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				<a href="#tabListPayment" class="mdl-tabs__tab is-active">Lista</a>
				<a href="#tabNewPayment" class="mdl-tabs__tab">Añadir</a>
				
			</div>
			<?php
			
			include "pres_insertar_tdoc.php";
			include "pres_consultar_tdoc.php";

			?>
		</div>
</body>