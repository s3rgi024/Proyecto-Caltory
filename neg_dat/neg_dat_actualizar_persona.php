<?php

    class persona{
        public function actualizar($fk_id_tdoc, $id_persona, $nom1, $nom2, $apellido1, $apellido2, $correo, $direccion, $fk_id_estado){
            include ("conexion.php");

            if ($fk_id_tdoc and $id_persona and $nom1 and $nom2 and $apellido1 and $apellido2 and $correo and $direccion and $fk_id_estado) {

            mysqli_query($db, "UPDATE persona SET fk_id_tdoc = '$fk_id_tdoc', nom1_persona = '$nom1', nom2_persona = '$nom2', apellido1_persona = '$apellido1',
            apellido2_persona = '$apellido2', correo_persona = '$correo', direccion_sede = '$direccion', fk_id_estado = '$fk_id_estado' WHERE id_persona = '$id_persona'");

                print "<script>alert(\"Usuario Actualizado exitosamente.\");window.location='../../pres/pres_usuarios.php';</script>";
            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../../pres/pres_usuarios.php';</script>";
            }

            }

        }

    $nuevo = new persona();
    $nuevo -> actualizar($_POST["fk_id_tdoc"], $_POST["id_persona"], $_POST["nom1"], $_POST["nom2"], $_POST["apellido1"], $_POST["apellido2"], 
    $_POST["correo"], $_POST["direccion"], $_POST["fk_id_estado"]);

?>