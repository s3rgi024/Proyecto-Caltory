<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar Categoría</title>
    </head>
    <body>
        <?php
            include "barra_lateral.php";
            include "barra_superior.php";

            class categoria {
                public function consultar_actualizar($id_categoria){

                    include ("../neg_dat/conexion.php");
        
                    $sql = "SELECT * FROM categoria WHERE id_categoria = '$id_categoria'";
        
                    if (!$result = $db -> query($sql)) {
                        die ('Error en la consulta! [' . $db -> error . ']');
                    }
        
                    while ($row = $result -> fetch_assoc()) {
                        $id = stripslashes($row["id_categoria"]);
                        $nom = stripslashes($row["nom_categoria"]);
                }
                
                ?>
                
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__panel is-active">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width ocolor2 mdl-cell mdl-cell--12-col panel-tittle tittles">
                                    <a href="pres_categorias.php" class="tdn full-width">
                                        <button class="mdl-button fcolor1 ocolor2" id="volver">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </button>
                                    </a>
                                        
                                        <div class="mdl-tooltip" for="volver">Regresar</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Actualizar Categoria
                                </div>
                                <div class="full-width panel-content">
                                    <form action="../neg_dat/neg_dat_actualizar_categoria.php" method="POST">
                                        <div class="mdl-grid">
                                            <div class="mdl-cell mdl-cell--12-col">
                                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Actualizar Información de categoría</legend><br>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                                                <input type="hidden" name="id_categoria" value="<?php echo $id; ?>">

                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="number" id="NameCategory" value="<?php echo $id; ?>" disabled>
                                                    <label class="mdl-textfield__label" for="NameCategory">Código</label>
                                                </div>
                                            </div>
                                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" type="text" id="descriptionCategory" name="nom_categoria" value="<?php echo $nom; ?>">
                                                    <label class="mdl-textfield__label" for="descriptionCategory">Nombre</label>
                                                    <span class="mdl-textfield__error">Nombre Inválido</span>
                                                </div>
                                            </div>
                                        </div>
                                            <p class="text-center">
                                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect ocolor2 hover1" id="btn-addCategory">
                                                    <i class="fa-solid fa-arrow-up-from-bracket fcolor1"></i>
                                                </button>
                                                <div class="mdl-tooltip" for="btn-addCategory">Actualizar Categoría</div>
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
        
            $nuevo = new categoria();
            $nuevo -> consultar_actualizar($_GET['id']);
        
        ?>