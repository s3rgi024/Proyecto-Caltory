<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuarios</title>
</head>
<body>
    <?php
    
    include "barra_lateral.php";
    include "barra_superior.php";
    
    ?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabListAdmin" class="mdl-tabs__tab is-active">Lista</a>
				<a href="#tabNewAdmin" class="mdl-tabs__tab ">Añadir</a>
			</div>
			<?php
			
				include "pres_consultar_usuarios.php";
				include "pres_insertar_usuarios.php";
			
			?>
			
		</div>
</body>