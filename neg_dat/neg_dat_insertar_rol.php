<?php

    class roles{
        public function insertar ($cod_rol, $rol){
            include ("conexion.php");

            
            if ($cod_rol and $rol) {
                mysqli_query($db, "INSERT INTO roles (id_rol, nom_rol) VALUES ('$cod_rol', '$rol')");

                print "<script>alert(\"Rol agregado exitosamente.\");window.location='../pres/pres_roles.php';</script>";
            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_roles.php';</script>";
            }

        }
    }

    $nuevo = new roles();
    $nuevo -> insertar($_POST["cod_rol"], $_POST["rol"]);



?>