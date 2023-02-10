<?php

    //Se llama la clase y se define una nueva función
    class inventario {
        public function filtrar_categoria($id_categoria){
            //Se incluye la conexion a la bd
            include ("conexion.php");

            //Se realizan dos consultas a la bd, la primera guarda información de la tabla categoria
            $sql = "SELECT nom_categoria FROM categoria WHERE id_categoria = '$id_categoria'";
            $reg = $db->query($sql);
            $info = $reg->fetch_assoc();
        	

            //Esta consulta guarda información de la tabla inventario para luego relacionarla con la tabla categoria
            $sql2 = "SELECT * FROM inventario WHERE fk_id_categoria = '$id_categoria'";
            $reg2 = $db->query($sql2);
            $reg_cat = $reg2->num_rows;
            if ($reg_cat <= 0) {
                echo "No se encontraron registros con esta categoría.";
            }
            

            if (!$result = $db -> query($sql2)) { 
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

            ?>
                <div class="mdl-card mdl-shadow--2dp full-width product-card">
					<div class="mdl-card__title">

						<img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">

					</div>
					<div class="mdl-card__supporting-text">
						
                        <small> Unidades disponibles: <?php echo $stock;?></small><br>
						<small>Categoría: <?php echo $info['nom_categoria']; ?></small><br>
                        <small>Precio: <?php echo $valor;?></small>
                        
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
                                <form action="neg_dat_eliminar_inventario.php" method="POST">
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
    $nuevo -> filtrar_categoria($_POST["id_categoria"]);
?>
