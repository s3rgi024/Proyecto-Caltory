<?php

    class inventario{
        public function eliminar ($id_insumo){
            include ("conexion.php");

            mysqli_query($db, "DELETE FROM inventario WHERE id_insumo = '$id_insumo'");
            
            print "<script>alert(\"Insumo/Producto eliminado exitosamente.\");window.location='../pres/pres_inventario.php';</script>";   

        }
    }

    $nuevo = new inventario();
    $nuevo -> eliminar($_POST["id_insumo"]);


?>