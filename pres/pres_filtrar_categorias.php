<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventario Principal</title>
</head>
<body>
    <?php
    
    include "barra_lateral.php";
    include "barra_superior.php";
    
    ?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				
				<a href="#tabListProducts" class="mdl-tabs__tab is-active">Inventario</a>
				<a href="#tabNewProduct" class="mdl-tabs__tab ">Añadir</a>

			</div>
			<?php

				include "pres_consultar_filtrar_categorias.php";
				include "pres_insertar_inventario.php";
				
			?>
</div>
</body>