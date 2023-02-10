<?php

    class estados_usuarios{
        public function actualizar($id_estado, $desc_estado){
            include ("conexion.php");

            mysqli_query($db, "UPDATE estados_usuarios SET id_estado = '$id_estado', desc_estado = '$desc_estado'");

        }
    }

    $nuevo = new estados_usuarios();
    $nuevo -> actualizar($_POST["id_estado"], $_POST["desc_estado"]);

?>