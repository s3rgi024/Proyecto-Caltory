<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar Tipo de Documento</title>
    </head>
    <body>
        <?php
            include "barra_lateral.php";
            include "barra_superior.php";

            class tdocs {
                public function consultar_actualizar($id_tdoc){

                    include ("../neg_dat/conexion.php");
        
                    $sql = "SELECT * FROM tipo_documento WHERE id_tdoc = '$id_tdoc'";
        
                    if (!$result = $db -> query($sql)) {
                        die ('Error en la consulta! [' . $db -> error . ']');
                    }
        
                    while ($row = $result -> fetch_assoc()) {
                        $id_tdoc = stripslashes($row["id_tdoc"]);
                        $tdoc = stripslashes($row["tdoc"]);
                        $desc_tdoc = stripslashes($row["desc_tdoc"]);
                }
                
                ?>
                
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__panel is-active">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <div class="full-width panel mdl-shadow--2dp">
                                <div class="full-width ocolor1 mdl-cell mdl-cell--12-col panel-tittle tittles">
                                    <a href="pres_tdoc.php" class="tdn full-width">
                                        <button class="mdl-button fcolor1 hover1" id="volver">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </button>
                                    </a>
                                        
                                        <div class="mdl-tooltip" for="volver">Regresar</div>
                                        &nbsp;&nbsp;&nbsp;&nbsp; Actualizar Tipo de documento
                                </div>
                <div class="full-width panel-content">
				    <form action="../neg_dat/neg_dat_actualizar_tdoc.php" method="POST">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Información Básica</legend><br>
                            </div>

                            <input type="hidden" name="id_tdoc" value="<?php echo $id_tdoc ?>">

                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="descriptionPayment" value="<?php echo $id_tdoc ?>" disabled>
                                    <label class="mdl-textfield__label" for="descriptionPayment">Código</label>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="NamePayment" name="tdoc" value="<?php echo $tdoc ?>">
                                    <label class="mdl-textfield__label" for="NamePayment">Abreviatura de Tipo de Documento</label>
                                    <span class="mdl-textfield__error">Abreviatura Inválida</span>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="descriptionPayment" name="desc_tdoc" value="<?php echo $desc_tdoc ?>">
                                    <label class="mdl-textfield__label" for="descriptionPayment">Descripción</label>
                                    <span class="mdl-textfield__error">Descripción Inválida</span>
                                </div>
                            </div>
                        </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect ocolor1 hover1" id="btn-addPayment">
                                    <i class="fa-solid fa-arrow-up-from-bracket fcolor1"></i>
                                </button>
                                <div class="mdl-tooltip" for="btn-addPayment">Actualizar Tipo de Documento</div>
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
        
            $nuevo = new tdocs();
            $nuevo -> consultar_actualizar($_GET['id_tdoc']);
        
        ?>