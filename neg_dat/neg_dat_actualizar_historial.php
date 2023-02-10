<?php

    class historial{
        public function actualizar($id_historial, $fk_id_insumo, $entrada, $salida, $fk_unidades_defectuosas, $stock){
            include ("conexion.php");

            mysqli_query($db, "UPDATE historial SET id_historial = '$id_historial', fk_id_insumo = '$fk_id_insumo',
            entrada = '$entrada', salida = '$salida', fk_unidades_defectuosas = '$fk_unidades_defectuosas', stock = '$stock'");

        }
    }

    $nuevo = new historial();
    $nuevo -> actualizar($_POST["id_historial"], $_POST["fk_id_insumo"], $_POST["entrada"], $_POST["salida"], $_POST["fk_unidades_defectuosas"], $_POST["stock"]);

?>