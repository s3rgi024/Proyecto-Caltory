<?php

    class estados_usuarios{
        public function insertar ($id_estado, $desc_estado){
            include ("conexion.php");
            mysqli_query($db, "INSERT INTO estados_usuarios (id_estado, desc_estado) 
            VALUES ('$id_estado, $desc_estado')");

        }
    }

    $nuevo = new estados_usuarios();
    $nuevo -> insertar($_POST["id_estado"], $_POST["desc_estado"]);



?>