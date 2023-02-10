<?php

    class persona{
        public function insertar ($fk_id_tdoc, $id_persona, $nom1_persona, $nom2_persona, $apellido1_persona, $apellido2_persona, 
                                $correo_persona, $direccion_sede, $nom_usuario, $pass_usuario, $fk_id_estado){
            include ("conexion.php");

            if ($fk_id_tdoc and $id_persona and $nom1_persona and $nom2_persona and $apellido1_persona and $apellido2_persona and 
                $correo_persona and $direccion_sede and $nom_usuario and $pass_usuario and $fk_id_estado) {
                
                    $pass_seg = password_hash ($pass_usuario, PASSWORD_DEFAULT);

                    mysqli_query($db, "INSERT INTO persona (fk_id_tdoc, id_persona, nom1_persona, nom2_persona, apellido1_persona, apellido2_persona, correo_persona,
                                        direccion_sede, nom_usuario, pass_usuario, fk_id_estado) 
                    VALUES ('$fk_id_tdoc', '$id_persona', '$nom1_persona', '$nom2_persona', '$apellido1_persona', '$apellido2_persona', 
                            '$correo_persona', '$direccion_sede', '$nom_usuario', '$pass_seg', '$fk_id_estado')");

                print "<script>alert(\"Usuario agregado exitosamente.\");window.location='../pres/pres_usuarios.php';</script>";
            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_usuarios.php';</script>";
            }

            }
    }

    $nuevo = new persona();
    $nuevo -> insertar($_POST["fk_id_tdoc"], $_POST["id_persona"], $_POST["nom1"], $_POST["nom2"], $_POST["apellido1"], 
                        $_POST["apellido2"], $_POST["correo"], $_POST["direccion"], $_POST["nom_usuario"], $_POST["pass_usuario"], $_POST["fk_id_estado"]);



?>