<?php

    class persona{
        public function eliminar ($fk_id_tdoc){
            include ("conexion.php");

            mysqli_query($db, "DELETE FROM persona WHERE id_persona = '$fk_id_tdoc'");
            print "<script>alert(\"Usuario eliminado exitosamente.\");window.location='../pres/pres_usuarios.php';</script>";   

        }
    }

    $nuevo = new persona();
    $nuevo -> eliminar($_POST["id_usuario"]);


?>