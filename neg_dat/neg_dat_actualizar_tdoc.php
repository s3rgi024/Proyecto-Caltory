<?php

    class tdocs{
        public function actualizar($id_tdoc, $tdoc, $desc_tdoc){
            include ("conexion.php");

            if ($id_tdoc and $tdoc and $desc_tdoc) {
                mysqli_query($db, "UPDATE tipo_documento SET tdoc = '$tdoc', desc_tdoc = '$desc_tdoc' WHERE id_tdoc = '$id_tdoc'");

                print "<script>alert(\"Tipo de documento Actualizado exitosamente.\");window.location='../../pres/pres_tdoc.php';</script>";
            } else {
                print "<script>alert(\"Error al actualizar datos, revise los campos e intente nuevamente.\");window.location='../../pres/pres_tdoc.php';</script>";                
            }

        }
    }

    $nuevo = new tdocs();
    $nuevo -> actualizar($_POST["id_tdoc"], $_POST["tdoc"], $_POST["desc_tdoc"]);

?>