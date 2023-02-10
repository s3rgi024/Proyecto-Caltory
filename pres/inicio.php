<?php

	include "../neg_dat/conexion.php";

	$persona = $db->query("SELECT * FROM persona");
	$reg_persona = $persona->num_rows;

	$inventario = $db->query("SELECT * FROM inventario");
	$reg_inventario = $inventario->num_rows;

	$historial = $db->query("SELECT * FROM historial");
	$reg_historial = $historial->num_rows;

	session_start();
	$usuario = $_SESSION['username'];
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
</head>
<body>
    <?php
    
    include "barra_lateral.php";
    include "barra_superior.php";

    ?>
    <section class="full-width text-center" style="padding: 40px 0;">
			<h3 class="text-center tittles">Seleccione una opción</h3>
			<!-- Tiles -->
			<article class="full-width tile">
				<a href="pres_usuarios.php">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php
								echo $reg_persona;							
							?><br>
							<small>Usuarios</small>
						</span>
					</div>
					<i class="zmdi fa-solid fa-users tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="pres_proveedores.php">
					<div class="tile-text">
						<span class="text-condensedLight">
							0<br>
							<small>Proveedores</small>
						</span>
					</div>
					<i class="zmdi fa-solid fa-truck-moving tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="pres_inventario.php">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php
								echo $reg_inventario;	
							?><br>
							<small>Inventario</small>
						</span>
					</div>
					<i class="zmdi fa-solid fa-clipboard-list tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="pres_entradas.php">
					<div class="tile-text">
						<span class="text-condensedLight">
							0<br>
							<small>Entradas</small>
						</span>
					</div>
					<i class="zmdi fa-solid fa-arrow-right-to-bracket tile-icon"></i>
				</a>
			</article>
			<article class="full-width tile">
				<a href="pres_historial.php">
					<div class="tile-text">
						<span class="text-condensedLight">
							<?php
								echo $reg_historial;
							?><br>
							<small>Historial</small>
						</span>
					</div>
					<i class="zmdi fa-solid fa-book tile-icon"></i>
				</a>
			</article>
		</article>
		<article class="full-width tile">
			<a href="pres_salidas.php">
				<div class="tile-text">
					<span class="text-condensedLight">
						0<br>
						<small>Salidas</small>
					</span>
				</div>
				<i class="zmdi fa-solid fa-arrow-right-from-bracket tile-icon"></i>
			</a>
		</article>
		<article class="full-width tile">
			<a href="pres_actualizar_info_personal.php">
				<div class="tile-text">
					<span class="text-condensedLight">
						<small>Editar <br>
							Información Personal</small>
					</span>
				</div>
				<i class="zmdi fa-solid fa-user tile-icon"></i>
			</a>
		</article>
	</section>
</body>
</html>