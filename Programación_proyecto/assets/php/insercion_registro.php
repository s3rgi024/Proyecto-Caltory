<?php

    require_once 'conexion.php';
    class registrar
    {
        private $pdo;
        public function __CONSTRUCT()
        {
            try {
                $this->pdo = database::conectar();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function insertar_persona($t_doc, $documento, $nom1, $nom2, $rol, $ape1, $ape2, $tel, $correo, $usuario, $pass)
        {

            $sql = "INSERT INTO  persona (pk_fk_tdoc, id_persona, nom1_persona, nom2_persona, apellido1_persona, apellido2_persona, telefono_persona, correo_persona) VALUES ('$t_doc', '$documento', '$nom1', '$nom2', '$ape1', '$ape2', '$tel', '$correo')";

            $this->pdo->query($sql);

            if ($sql) {
                $sql2 = "INSERT INTO cuentas_usuario(nom_usuario, pass_usuario) VALUES ('$usuario', '$pass')";
                $this->pdo->query($sql2);
            }

            if ($sql2) {
                $sql3 = "INSERT INTO empleado(tdoc_empleado, id_empleado, fk_pk_nom_usuario, fk_pass_usuario, fk_rol) VALUES ('$t_doc', '$documento', '$usuario', '$pass', '$rol')";
                $this->pdo->query($sql3);

                print "<script>alert(\"Registro agregado exitosamente.\");window.location='inicio_sesion.php';</script>";
            }

        }

    }

?>