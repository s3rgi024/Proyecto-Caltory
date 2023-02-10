<?php

    class permisos{
        public function actualizar($id_permiso, $fk_id_persona, $fk_id_rol){
            include ("conexion.php");

            mysqli_query($db, "UPDATE permisos SET id_permiso = '$id_permiso', fk_id_persona = '$fk_id_persona', fk_id_rol = '$fk_id_rol'");

        }
    }

    $nuevo = new permisos();
    $nuevo -> actualizar($_POST["id_permiso"], $_POST["fk_id_persona"], $_POST["fk_id_rol"]);

?>