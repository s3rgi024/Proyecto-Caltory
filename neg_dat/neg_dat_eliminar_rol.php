<?php

    class roles{
        public function eliminar ($id_rol){
            include ("conexion.php");

            mysqli_query($db, "DELETE FROM roles WHERE id_rol = '$id_rol'");
            
            print "<script>alert(\"Rol eliminado exitosamente.\");window.location='../pres/pres_roles.php';</script>";   

        }
    }

    $nuevo = new roles();
    $nuevo -> eliminar($_POST["id_rol"]);


?>