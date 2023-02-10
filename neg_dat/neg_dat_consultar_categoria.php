<?php

    class categoria {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM categoria";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

            while ($row = $result -> fetch_assoc()) {
                $id_categoria = stripslashes($row["id_categoria"]);
                $nom_categoria = stripslashes($row["nom_categoria"]);
            
                ?>

                <div class="mdl-list">
					<div class="mdl-list__item mdl-list__item--two-line">
						<span class="mdl-list__item-primary-content">
							<i class="zmdi zmdi-label mdl-list__item-avatar"></i>
							<span><?php echo $nom_categoria; ?></span>
							<span class="mdl-list__item-sub-title">
                                ID: <?php echo $id_categoria;?>
                            </span>
						</span>
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="<?php echo $id_categoria;?>">
						    <i class="zmdi zmdi-more"></i>
				        </button>

                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="<?php echo $id_categoria;?>">
                            <a href="../pres/pres_actualizar_categoria.php?id=<?php echo $id_categoria; ?>" class="full-width boton text-center">
                                <li class="mdl-menu__item">
                                    <button class="boton full-width">
                                        Actualizar
                                    </button>
                                </li>
                            </a>
                            <li class="mdl-menu__item">
                                <form action="../neg_dat/neg_dat_eliminar_categoria.php" method="POST">
                                    <input type="hidden" name="id_categoria" value="<?php echo $id_categoria; ?>">
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

    $nuevo = new categoria();
    $nuevo -> consultar();


?>