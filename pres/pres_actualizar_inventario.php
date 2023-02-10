<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar Producto/Insumo</title>
    </head>
    <body>
        <?php
            include "barra_lateral.php";
            include "barra_superior.php";

            class inventario {
                public function consultar_actualizar($id){
                    include ("../neg_dat/conexion.php");
        
                    $sql = "SELECT * FROM inventario WHERE id_insumo = '$id'";

                    
                    
        
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

                        $sql2 = "SELECT * FROM categoria EXCEPT  
                        SELECT *   
                        FROM categoria
                        WHERE id_categoria = '$categoria'";


                        $sql3 = "SELECT * FROM categoria WHERE id_categoria = '$categoria'";
                        $query3 = $db->query($sql3);
                        $resultado3 = $query3->fetch_assoc();
                }
                
                ?>
                
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__panel is-active">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width color3 mdl-cell mdl-cell--12-col panel-tittle tittles">
                                    <a href="pres_inventario.php" class="tdn full-width">
                                        <button class="mdl-button fcolor1 hover1" id="volver">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </button>
                                    </a>
                                        
                                        <div class="mdl-tooltip" for="volver">Regresar</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Actualizar Producto o Insumo
                                </div>
                            <div class="full-width panel-content">
                                <form action="../neg_dat/neg_dat_actualizar_inventario.php" method="POST">
                                    <div class="mdl-grid">
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Actualizar Información Básica</legend><br>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                                            <input type="hidden" name="id_insumo" value="<?php echo $id; ?>">

                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <label class="mdl-textfield__label" for="BarCode"><i class="fa-solid fa-hashtag"></i> Código</label>
                                                <input class="mdl-textfield__input" type="number" id="BarCode" value="<?php echo $id; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <label class="mdl-textfield__label" for="NameProduct"><i class="fa-solid fa-italic"></i> Nombre</label>
                                                <input class="mdl-textfield__input" type="text" id="NameProduct" name="nom_insumo" value="<?php echo $nom; ?>">
                                                <span class="mdl-textfield__error">Nombre Inválido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--10-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <label class="mdl-textfield__label" for="StrockProduct"><i class="fa-solid fa-boxes-stacked"></i> Cantidad</label>
                                                <input class="mdl-textfield__input" type="number" id="StrockProduct" name="stock" value="<?php echo $stock; ?>">
                                                <span class="mdl-textfield__error">Cantidad Inválida</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--10-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <label class="mdl-textfield__label" for="PriceProduct"><i class="fa-solid fa-dollar-sign"></i> Precio</label>
                                                <input class="mdl-textfield__input" type="number" id="PriceProduct" name="valor_insumo" value="<?php echo $valor; ?>">
                                                <span class="mdl-textfield__error"> Precio Inválido</span>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="fa-solid fa-tags"></i> Actualizar Categoría</legend>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <div class="mdl-textfield mdl-js-textfield">


                                                <select class="mdl-textfield__input" name="fk_id_categoria">
                                                    
                                                    <option value="<?php echo $resultado3['id_categoria'];?>" selected><?php echo $resultado3['nom_categoria'];?></option>

                                                    <?php
                                                    
                                                    if (!$result2 = $db -> query($sql2)) {
                                                        die ('Error en la consulta! [' . $db -> error . ']');
                                                    }
                                        
                                                    while ($row = $result2 -> fetch_assoc()) {
                                                        $id_categoria = stripslashes($row["id_categoria"]);
                                                        $nom_categoria = stripslashes($row["nom_categoria"]);

                                                        ?>
                                                        
                                                        <option value="<?php echo $id_categoria; ?>"><?php echo $nom_categoria; ?></option>
                                                        
                                                        <?php
                                                        
                                                    }
                                                    
                                                    ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--12-col">
                                            <legend class="text-condensedLight"><i class="fa-solid fa-truck-ramp-box"></i> &nbsp; Actualizar Información del Proveedor</legend>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <select class="mdl-textfield__input" name="nom_proveedor">
                                                    <option value="" selected>Seleccione un proveedor</option>
                                                    <option>Calten.SAS</option>
                                                    <option>PAVCO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <label class="mdl-textfield__label"><i class="fa-solid fa-location-dot"></i> Dirección</label>
                                                <input class="mdl-textfield__input" type="text" name="direccion_proveedor" value="<?php echo $direccion; ?>"> 
                                                <span class="mdl-textfield__error">Dirección Inválida</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center mdl-cell mdl-cell--12-col">
                                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect color3 fcolor1 hover1" id="btn-addProduct" type="submit">
                                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                        </button>
                                        <div class="mdl-tooltip" for="btn-addProduct">Actualizar Producto/Insumo</div>
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
        
            $nuevo = new inventario();
            $nuevo -> consultar_actualizar($_GET['id']);
        
        ?>