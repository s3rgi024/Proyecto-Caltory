<?php

    class estados_usuarios{
        public function eliminar ($id_estado, $desc_estado){
            include ("conexion.php");


            mysqli_query($db, "DELETE FROM estados_usuarios WHERE id_estado = '$id_estado' AND desc_estado = '$desc_estado");
            print "<script>alert(\"Usuario eliminado exitosamente.\");window.location='neg_dat_consultar_usuarios.php';</script>";   

        }
    }

    $nuevo = new estados_usuarios();
    $nuevo -> eliminar($_POST["id_tdoc"]);


?>