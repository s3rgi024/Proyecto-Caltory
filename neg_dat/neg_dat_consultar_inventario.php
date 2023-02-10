<?php

    class inventario {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM inventario";
            

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

            while ($row = $result -> fetch_assoc()) {
                $id = stripslashes($row["id_insumo"]);
                $nom = stripslashes($row["nom_insumo"]);
                $stock = stripslashes($row["stock"]);
                $valor = stripslashes($row["valor_insumo"]);
                $categoria = stripslashes($row["fk_id_categoria"]);
                $proveedor = stripslashes($row["nom_proveedor"]);
                $direccion = stripslashes($row["direccion_proveedor"]);

                $sql2 = "SELECT nom_categoria FROM categoria WHERE id_categoria = '$categoria'";
                $query = $db->query($sql2);
                $resultado = $query->fetch_assoc();
                

            ?>
                <div class="mdl-card mdl-shadow--2dp full-width product-card">
					<div class="mdl-card__title">
						<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
					</div>
					<div class="mdl-card__supporting-text">
						<small>Unidades disponibles: <?php echo $stock;?></small><br>
						<small>Categoría: <?php echo $resultado['nom_categoria'];?></small><br>
                        <small>Precio: $<?php echo $valor;?></small><br>
					</div>
					<div class="mdl-card__actions mdl-card--border">
                        <?php echo $nom;?>
                        
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="<?php echo $id;?>">
						    <i class="zmdi zmdi-more"></i>
				        </button>
                      
                        <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" for="<?php echo $id;?>">
                            <li class="mdl-menu__item">
                                <a href="../pres/pres_actualizar_inventario.php?id=<?php echo $id; ?>" class="full-width boton text-center">
                                    Actualizar
                                </a>
                            </li>
                            <li class="mdl-menu__item">
                                <form action="../neg_dat/neg_dat_eliminar_inventario.php" method="POST">
                                    <input type="hidden" name="id_insumo" value="<?php echo $id; ?>">
                                    <button class="boton full-width" id="eliminar_mercancia">
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

    $nuevo = new inventario();
    $nuevo -> consultar();
?>