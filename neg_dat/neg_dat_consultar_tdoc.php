<?php

    class tdocs {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM tipo_documento";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

            while ($row = $result -> fetch_assoc()) {

                $id_tdoc = stripslashes($row["id_tdoc"]);
                $tdoc = stripslashes($row["tdoc"]);
                $desc = stripslashes($row["desc_tdoc"]);

                ?>

                <div class="mdl-list">
					<div class="mdl-list__item mdl-list__item--two-line">
						<span class="mdl-list__item-primary-content">
						    <i class="zmdi zmdi-card mdl-list__item-avatar"></i>
						    <span><?php echo $desc; ?></span>
							<span class="mdl-list__item-sub-title">ID: <?php echo $id_tdoc; ?></span>
						</span>
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="<?php echo $id_tdoc;?>">
						    <i class="zmdi zmdi-more"></i>
				        </button>
                      
                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="<?php echo $id_tdoc;?>">
                            
                                <a href="../pres/pres_actualizar_tdoc.php?id_tdoc=<?php echo $id_tdoc; ?>">
                                    <li class="mdl-menu__item">
                                        <button class="boton full-width">
                                            Actualizar
                                        </button>
                                    </li>
                                </a>
                            
                            <li class="mdl-menu__item">
                                <form action="../neg_dat/neg_dat_eliminar_tdoc.php" method="POST">
                                    <input type="hidden" name="id_tdoc" value="<?php echo $id_tdoc; ?>">
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

    $nuevo = new tdocs();
    $nuevo -> consultar();


?>