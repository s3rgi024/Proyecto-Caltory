<?php

    class roles{
        public function actualizar($cod_rol, $rol){
            include ("conexion.php");

            if ($cod_rol and $rol) {

                mysqli_query($db, "UPDATE roles SET nom_rol = '$rol' WHERE id_rol = '$cod_rol'");
    
                print "<script>alert(\"Rol Actualizado exitosamente.\");window.location='../../pres/pres_roles.php';</script>";
            } else{
                print "<script>alert(\"Error al actualizar datos, revise los campos e intente nuevamente.\");window.location='../../pres/pres_roles.php';</script>";
            }

        }
    }

    $nuevo = new roles();
    $nuevo -> actualizar($_POST["cod_rol"], $_POST["rol"]);

?>