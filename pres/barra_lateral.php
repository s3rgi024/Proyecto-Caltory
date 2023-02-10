<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/sweetalert2.css">
		<link rel="stylesheet" href="css/material.min.css">
		<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="js/material.min.js" ></script>
		<script src="js/sweetalert2.min.js" ></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
		<script src="js/main.js" ></script>
		<script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
	</head>
	<section class="full-width navLateral">
			<div class="full-width navLateral-bg btn-menu"></div>
			<div class="full-width navLateral-body">
				<div class="full-width navLateral-body-logo text-center tittles ocolor3">
					Menú Principal 
				</div>
				<figure class="full-width navLateral-body-tittle-menu">
					<div>
						<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
					</div>
					<figcaption>
						<span>
							Nombre<br>
							<small>Rol</small>
						</span>
					</figcaption>
				</figure>
				<nav class="full-width">
					<ul class="full-width list-unstyle menu-principal">
						<li class="full-width">
							<a href="inicio.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi fa-solid fa-house"></i>
								</div>
								<div class="navLateral-body-cr">
									INICIO
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="#!" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi fa-solid fa-rectangle-list"></i>
								</div>
								<div class="navLateral-body-cr">
									INVENTARIO
								</div>
								<span class="zmdi zmdi-chevron-left"></span>
							</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="pres_inventario.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-cart-flatbed"></i>
										</div>
										<div class="navLateral-body-cr">
											INVENTARIO PRINCIPAL
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="pres_historial.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-book-open"></i>
										</div>
										<div class="navLateral-body-cr">
											HISTORIAL
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="pres_categorias.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-tag"></i>
										</div>
										<div class="navLateral-body-cr">
											CATEGORÍAS
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="pres_proveedores.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-truck-moving"></i>
										</div>
										<div class="navLateral-body-cr">
											PROVEEDORES
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="#!" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi fa-solid fa-people-group"></i>
								</div>
								<div class="navLateral-body-cr">
									CONTROL DE USUARIOS
								</div>
								<span class="zmdi zmdi-chevron-left"></span>
							</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="pres_usuarios.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-user-group"></i>
										</div>
										<div class="navLateral-body-cr">
											VISTA GENERAL
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="pres_roles.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-user-tag"></i>
										</div>
										<div class="navLateral-body-cr">
											ROLES
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="pres_tdoc.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-id-card"></i>
										</div>
										<div class="navLateral-body-cr">
											TIPOS DE DOCUMENTO
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="#!" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-wrench"></i>
								</div>
								<div class="navLateral-body-cr">
									AJUSTES
								</div>
								<span class="zmdi zmdi-chevron-left"></span>
							</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="pres_actualizar_info_personal.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi fa-solid fa-person-circle-exclamation"></i>
										</div>
										<div class="navLateral-body-cr">
											INFORMACIÓN PERSONAL
										</div>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
	</section>
</html>