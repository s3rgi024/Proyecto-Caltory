<?php

    class roles {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM roles";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

            while ($row = $result -> fetch_assoc()) {
                $id_rol = stripslashes($row["id_rol"]);
                $nom_rol = stripslashes($row["nom_rol"]);
            
                ?>

                <div class="mdl-list">
					<div class="mdl-list__item mdl-list__item--two-line">
						<span class="mdl-list__item-primary-content">
							<i class="zmdi zmdi-label mdl-list__item-avatar"></i>
							<span><?php echo $nom_rol; ?></span>
							<span class="mdl-list__item-sub-title">
                                ID: <?php echo $id_rol;?>
                            </span>
						</span>
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="<?php echo $id_rol;?>">
						    <i class="zmdi zmdi-more"></i>
				        </button>
                      
                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="<?php echo $id_rol;?>">
                            <a href="../pres/pres_actualizar_rol.php?id=<?php echo $id_rol; ?>">
                                <li class="mdl-menu__item">
                                    <button class="boton full-width">
                                        Actualizar
                                    </button>
                                </li>
                            </a>
                            <li class="mdl-menu__item">
                                <form action="../../neg_dat/neg_dat_eliminar_rol.php" method="POST">
                                    <input type="hidden" name="id_rol" value="<?php echo $id_rol; ?>">
                                    <button class="boton full-width">
                                        Eliminar
                                    </button>
                                </form>
                            </li>
                        </ul>
					</div>
				</div>
            
            <?php
            
            }
        }
    }

    $nuevo = new roles();
    $nuevo -> consultar();


?>