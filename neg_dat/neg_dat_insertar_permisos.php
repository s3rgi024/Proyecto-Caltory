<?php

    class permisos{
        public function insertar ($id_permisos, $fk_id_persona, $fk_id_rol){
            include ("conexion.php");
            mysqli_query($db, "INSERT INTO permisos (id_permisos, fk_id_persona, fk_id_rol) 
            VALUES ('$id_permisos, $fk_id_persona, $fk_id_rol')");

        }
    }

    $nuevo = new permisos();
    $nuevo -> insertar($_POST["id_permisos"], $_POST["fk_id_persona"], $_POST["fk_id_rol"]);



?>