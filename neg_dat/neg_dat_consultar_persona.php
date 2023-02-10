<?php

    class persona {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM persona";
            

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

                $sql2 = "SELECT tdoc FROM tipo_documento WHERE id_tdoc = '$tdoc'";
				$query2 = $db->query($sql2);
				$resultado2 = $query2->fetch_assoc();

                $sql3 = "SELECT * FROM estados_usuarios WHERE id_estado = '$estado'";
				$query3 = $db->query($sql3);
				$resultado3 = $query3->fetch_assoc();
            
            ?>

                <div class="mdl-list">
					<div class="mdl-list__item mdl-list__item--two-line">
						<span class="mdl-list__item-primary-content">
							<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
							<span><?php echo $nombre1 . " " . $nombre2 . " " . $apellido1 . " " . $apellido2; ?></span>
							<span class="mdl-list__item-sub-title">
                                <?php echo $resultado2['tdoc'] . " : " . $doc; ?>
                            </span>
                            <span class="mdl-list__item-sub-title">
                                Estado: <?php echo $resultado3['desc_estado'] ?>
                            </span>
						</span>
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="<?php echo $doc;?>">
						    <i class="zmdi zmdi-more"></i>
				        </button>
                      
                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="<?php echo $doc;?>">
                            <a href="../pres/pres_actualizar_usuario.php?id=<?php echo $doc; ?>">
                                <li class="mdl-menu__item">
                                    <button class="boton full-width">
                                        Actualizar
                                    </button>
                                </li>
                            </a>
                            <li class="mdl-menu__item">
                                <form action="../neg_dat/neg_dat_eliminar_persona.php" method="POST">
                                    <input type="hidden" name="id_usuario" value="<?php echo $doc; ?>">
                                    <button class="boton full-width">
                                        Eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
					</div>
					<li class="full-width divider-menu-h"></li>
				</div>

            <?php
            
            }
        }
    }

    $nuevo = new persona();
    $nuevo -> consultar();

?>