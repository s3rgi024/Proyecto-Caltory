<?php

    class historial{
        public function insertar ($id_historial, $fk_id_insumo, $entrada, $salida, $fk_unidades_defectuosas, $stock){
            include ("conexion.php");
            mysqli_query($db, "INSERT INTO historial (id_historial, fk_id_insumo, entrada, salida, fk_unidades_defectuosas, stock)
            VALUES ('$id_historial, $fk_id_insumo, $entrada, $salida, $fk_unidades_defectuosas, $stock')");

        }
    }

    $nuevo = new historial();
    $nuevo -> insertar($_POST["id_historial"], $_POST["fk_id_insumo"], $_POST["entrada"], $_POST["salida"], $_POST["fk_unidades_defectuosas"], $_POST["stock"]);

?>