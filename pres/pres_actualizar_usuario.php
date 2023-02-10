<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar Usuario</title>
    </head>
    <body>
        <?php
            include "barra_lateral.php";
            include "barra_superior.php";

            class persona {
                public function consultar_actualizar($doc){

                    include ("../neg_dat//conexion.php");
        
                    $sql = "SELECT * FROM persona WHERE id_persona = '$doc'";
        
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
                        $estado = stripslashes($row["fk_id_estado"]);

						$sql2 = "SELECT * FROM tipo_documento EXCEPT  
                        SELECT *   
                        FROM tipo_documento
                        WHERE id_tdoc = '$tdoc'";

						$sql3 = "SELECT * FROM tipo_documento WHERE id_tdoc = '$tdoc'";
						$query3 = $db->query($sql3);
						$resultado3 = $query3->fetch_assoc();


                        $sql4 = "SELECT * FROM estados_usuarios EXCEPT  
                        SELECT *   
                        FROM estados_usuarios
                        WHERE id_estado = '$estado'";

						$sql5 = "SELECT * FROM estados_usuarios WHERE id_estado = '$estado'";
                        $query5 = $db->query($sql5);
                        $resultado5 = $query5->fetch_assoc();


                        }
                
                ?>
                
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__panel is-active">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width color3 mdl-cell mdl-cell--12-col panel-tittle tittles">
                                    <a href="pres_usuarios.php" class="tdn full-width">
                                        <button class="mdl-button fcolor1 hover1" id="volver">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </button>
                                    </a>
                                        
                                        <div class="mdl-tooltip" for="volver">Regresar</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Actualizar Usuario
                                </div>
                                
                <div class="full-width panel-content">
					<form action="../neg_dat//neg_dat_actualizar_persona.php" method="POST">
					    <div class="mdl-grid">
							<div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Datos del Usuario</legend><br>
							</div>
							<div class="mdl-cell mdl-cell--12-col">
							    <div class="mdl-textfield mdl-js-textfield">
									<select class="mdl-textfield__input" name="fk_id_tdoc">
										<option value="<?php echo $resultado3['id_tdoc'];?>" selected>
											<?php echo $resultado3['tdoc'] . ' (' . $resultado3['desc_tdoc'] . ')';?>
										</option>
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

                            <input type="hidden" name="id_persona" value= "<?php echo $doc;?>">

							<div class="mdl-cell mdl-cell--12-col">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="doc" value="<?php echo $doc;?>" disabled>
									<label class="mdl-textfield__label" for="doc">Número de Documento</label>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nom1" value="<?php echo $nombre1;?>">
									<label class="mdl-textfield__label" for="NameAdmin">Primer Nombre</label>
									<span class="mdl-textfield__error">Nombre Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nom2" value="<?php echo $nombre2;?>">
									<label class="mdl-textfield__label" for="NameAdmin">Segundo Nombre</label>
									<span class="mdl-textfield__error">Nombre Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="apellido1" value="<?php echo $apellido1; ?>">
								    <label class="mdl-textfield__label" for="LastNameAdmin">Primer Apellido</label>
								    <span class="mdl-textfield__error">Apellido Inválido</span>
							    </div>
							</div>
							<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="apellido2" value="<?php echo $apellido2; ?>">
								    <label class="mdl-textfield__label" for="LastNameAdmin">Segundo Apellido</label>
								    <span class="mdl-textfield__error">Apellido Inválido</span>
							    </div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="email" id="emailAdmin" name="correo" value="<?php echo $correo; ?>">
									<label class="mdl-textfield__label" for="emailAdmin">Correo Electrónico</label>
									<span class="mdl-textfield__error">Correo Inválido</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="addressAdmin" name="direccion" value="<?php echo $direccion; ?>">
									<label class="mdl-textfield__label" for="addressAdmin">Dirección</label>
									<span class="mdl-textfield__error">Dirección Inválida</span>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col">
								<legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Datos de Acceso</legend><br>
							</div>

							<div class="mdl-cell mdl-cell--12-col">
							    <div class="mdl-textfield mdl-js-textfield">
									<select class="mdl-textfield__input" name="fk_id_estado">
										<option value="<?php echo $resultado5['id_estado'];?>" selected>
											<?php echo $resultado5['desc_estado'];?>
										</option>
										<?php
                                                    
                                                    if (!$result3 = $db -> query($sql4)) {
                                                        die ('Error en la consulta! [' . $db -> error . ']');
                                                    }
                                        
                                                    while ($row = $result3 -> fetch_assoc()) {
                                                        $id_estado = stripslashes($row["id_estado"]);
                                        				$desc_estado = stripslashes($row["desc_estado"]);

                                                        ?>
                                                        
                                                        <option value="<?php echo $id_estado; ?>"><?php echo $desc_estado; ?></option>
                                                        
                                                        <?php
                                                        
                                                    }
                                                    
                                        ?>
									</select>
								</div>
							</div>

						</div>
						<p class="text-center">
							<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect color3 hover1" id="btn-addAdmin">
								<i class="fa-solid fa-arrow-up-from-bracket fcolor1"></i>
							</button>
							<div class="mdl-tooltip" for="btn-addAdmin">
								Actualizar Usuario
                            </div>
						</p>
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
</div>
                
                <?php
            }
        }
        
            $nuevo = new persona();
            $nuevo -> consultar_actualizar($_GET['id']);
        
        ?>
    </body>

</html>