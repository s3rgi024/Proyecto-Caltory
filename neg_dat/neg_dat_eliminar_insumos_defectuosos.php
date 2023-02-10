<?php

    class insumos_defectuosos{
        public function eliminar ($fk_id_insumo){
            include ("conexion.php");

            mysqli_query($db, "UPDATE insumos_defectuosos SET fk_id_insumo = '1001' WHERE fk_id_insumo = '$fk_id_insumo'");
            mysqli_query($db, "DELETE FROM insumos_defectuosos WHERE fk_id_insumo = '$fk_id_insumo'");
            
            print "<script>alert(\"Insumo defectuoso eliminado exitosamente.\");window.location='neg_dat_consultar_insumos_defectuosos.php';</script>";   

        }
    }

    $nuevo = new insumos_defectuosos();
    $nuevo -> eliminar($_POST["fk_id_insumo"]);


?>