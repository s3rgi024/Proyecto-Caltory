<?php

    class tdocs{
        public function eliminar ($id_tdoc){
            include ("conexion.php");

            mysqli_query($db, "DELETE FROM tipo_documento WHERE id_tdoc = '$id_tdoc'");
            print "<script>alert(\"Tipo de documento eliminado exitosamente.\");window.location='../pres/pres_tdoc.php';</script>";   

        }
    }

    $nuevo = new tdocs();
    $nuevo -> eliminar($_POST["id_tdoc"]);


?>