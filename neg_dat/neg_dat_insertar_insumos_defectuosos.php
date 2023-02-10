<?php

    class insumos_defectuosos{
        public function insertar ($fk_id_insumo, $unidades_defectuosas, $desc_insumo){
            include ("conexion.php");
            mysqli_query($db, "INSERT INTO insumos_defectuosos (fk_id_insumo, unidades_defectuosas, desc_insumo)
            VALUES ('$fk_id_insumo, $unidades_defectuosas, $desc_insumo')");

        }
    }

    $nuevo = new insumos_defectuosos();
    $nuevo -> insertar($_POST["fk_id_insumo"], $_POST["unidades_defectuosas"], $_POST["desc_insumo"]);



?>