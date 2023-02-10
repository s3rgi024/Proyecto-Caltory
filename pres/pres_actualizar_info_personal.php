<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Información Personal</title>
</head>
<body>
    <?php
    
		include "barra_lateral.php";
		include "barra_superior.php";

		class persona {
			public function consultar_actualizar_personal($doc_personal){
				include ("../neg_dat//conexion.php");
        
                    $sql = "SELECT * FROM persona WHERE id_persona = '$doc_personal'";
        
                    if (!$result = $db -> query($sql)) {
                        die ('Error en la consulta! [' . $db -> error . ']');
                    }
        
                    while ($row = $result -> fetch_assoc()) {
                        $tdoc = stripslashes($row["fk_id_tdoc"]);
                        $doc = stripslashes($row["id_persona"]);
                        $nombre1 = stripslashes($row["nom1_persona"]);
                        $nombre2 = stripslashes($row["nom2_persona"]);
                        $apellido1 = stripslashes($row["apellido1_persona"]);
                        $apellido2 = stripslashes($row["apellido2_persona"]);
                        $correo = stripslashes($row["correo_persona"]);
                        $direccion = stripslashes($row["direccion_sede"]);
                        $nom_usu = stripslashes($row["nom_usuario"]);
                        $pass_usu = stripslashes($row["pass_usuario"]);

						$sql2 = "SELECT * FROM tipo_documento EXCEPT  
                        SELECT *   
                        FROM tipo_documento
                        WHERE id_tdoc = '$tdoc'";

						$sql3 = "SELECT * FROM tipo_documento WHERE id_tdoc = '$tdoc'";
						$query3 = $db->query($sql3);
						$resultado3 = $query3->fetch_assoc();


						}
						?>
						
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--12-col">
					<div class="full-width panel mdl-shadow--2dp">
						<div class="full-width panel-tittle text-center tittles color3">
							Cambiar Información personal
						</div>
						<div class="full-width panel-content">
							<form action="../neg_dat/neg_dat_insertar_persona.php" method="POST">
								<div class="mdl-grid">
									<div class="mdl-cell mdl-cell--12-col">
										<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Cambiar Información Básica</legend><br>
									</div>
									<div class="mdl-cell mdl-cell--12-col">
										<div class="mdl-textfield mdl-js-textfield">
											<select class="mdl-textfield__input" name="fk_id_tdoc">
												<option value="" disabled="" selected="">Seleccione Tipo de Documento</option>
												<?php
                                                    
                                                    if (!$result2 = $db -> query($sql2)) {
                                                        die ('Error en la consulta! [' . $db -> error . ']');
                                                    }
                                        
                                                    while ($row = $result2 -> fetch_assoc()) {
                                                        $id_tdoc = stripslashes($row["id_tdoc"]);
                                        				$nom_tdoc = stripslashes($row["tdoc"]);
														$desc_tdoc = stripslashes($row["desc_tdoc"]);

                                                        ?>
                                                        
                                                        <option value="<?php echo $id_tdoc; ?>"><?php echo $nom_tdoc . " (" . $desc_tdoc . ")"; ?></option>
                                                        
                                                        <?php
                                                        
                                                    }
                                                    
                                        		?>
											</select>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--12-col">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="doc" name="id_persona">
											<label class="mdl-textfield__label" for="doc">Número de Documento</label>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nom1">
											<label class="mdl-textfield__label" for="NameAdmin">Primer Nombre</label>
											<span class="mdl-textfield__error">Nombre Inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nom2">
											<label class="mdl-textfield__label" for="NameAdmin">Segundo Nombre</label>
											<span class="mdl-textfield__error">Nombre Inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="apellido1">
											<label class="mdl-textfield__label" for="LastNameAdmin">Primer Apellido</label>
											<span class="mdl-textfield__error">Apellido Inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="apellido2">
											<label class="mdl-textfield__label" for="LastNameAdmin">Segundo Apellido</label>
											<span class="mdl-textfield__error">Apellido Inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="email" id="emailAdmin" name="correo">
											<label class="mdl-textfield__label" for="emailAdmin">Correo Electrónico</label>
											<span class="mdl-textfield__error">Correo Inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" id="addressAdmin" name="direccion">
											<label class="mdl-textfield__label" for="addressAdmin">Dirección</label>
											<span class="mdl-textfield__error">Dirección Inválida</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--12-col">
										<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Cambiar Datos de Acceso</legend><br>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin" name="nom_usuario">
											<label class="mdl-textfield__label" for="UserNameAdmin">Nombre de Usuario</label>
											<span class="mdl-textfield__error">Nombre de usuario inválido</span>
										</div>
									</div>
									<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="password" id="passwordAdmin" name="pass_usuario">
											<label class="mdl-textfield__label" for="passwordAdmin">Contraseña</label>
											<span class="mdl-textfield__error">Contraseña Inválida</span>
										</div>
									</div>

									<input type="hidden" name="fk_id_estado" value="1">

									<div class="mdl-cell mdl-cell--12-col">
										<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Cambiar Foto de Perfil</legend><br>
									</div>
									<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
										<div class="mdl-grid">
											<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
													<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png" name="">
													<img src="assets/img/avatar-male.png" alt="avatar" style="height: 45px; width="45px;" ">
													<span class="mdl-radio__label">Avatar 1</span>
												</label>
											</div>
											<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
													<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png" name="">
													<img src="assets/img/avatar-female.png" alt="avatar" style="height: 45px; width ="45px;" ">
													<span class="mdl-radio__label">Avatar 2</span>
												</label>
											</div>
											<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
													<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png" name="">
													<img src="assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width="45px;" ">
													<span class="mdl-radio__label">Avatar 3</span>
												</label>
											</div>
											<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
													<input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png" name="">
													<img src="assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width="45px;" ">
													<span class="mdl-radio__label">Avatar 4</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<p class="text-center">
									<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect color3 hover1" id="btn-addAdmin">
										<i class="fa-solid fa-arrow-up-from-bracket fcolor1"></i>
									</button>
									<div class="mdl-tooltip" for="btn-addAdmin">
										Añadir Usuario
									</div>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
						
						
						<?php
                        
			}
		
		}
    
		$nuevo = new persona();
        $nuevo -> consultar_actualizar_personal($_POST['id']);
    ?>

	
</body>