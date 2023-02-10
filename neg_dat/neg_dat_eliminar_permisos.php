<?php

    class roles{
        public function permisos ($id_permisos){
            include ("conexion.php");

            mysqli_query($db, "UPDATE permisos SET id_permisos = '301' WHERE id_permiso = '$id_permisos'");
            mysqli_query($db, "DELETE FROM permisos WHERE id_permisos = '$id_permisos'");
            
            print "<script>alert(\"Permiso eliminado exitosamente.\");window.location='neg_dat_consultar_permisos.php';</script>";   

        }
    }

    $nuevo = new permisos();
    $nuevo -> eliminar($_POST["id_permisos"]);


?>