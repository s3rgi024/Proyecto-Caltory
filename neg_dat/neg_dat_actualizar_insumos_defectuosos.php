<?php

    class insumos_defectuosos{
        public function actualizar($fk_id_insumo, $unidades_defectuosas, $desc_insumo){
            include ("conexion.php");

            mysqli_query($db, "UPDATE insumos_defectuosos SET fk_id_insumo=?", $fk_id_insumo, $unidades_defectuosas, $desc_insumo);

        }
    }

    $nuevo = new insumos_defectuosos();
    $nuevo -> actualizar($_POST["fk_id_insumo"], $_POST["unidades_defectuosas"], $_POST["desc_insumo"]);

?>