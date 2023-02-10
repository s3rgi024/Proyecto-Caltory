<?php

    class tdocs{
        public function insertar ($nom_tdoc, $desc_tdoc){
            include ("conexion.php");

            if ($nom_tdoc and $desc_tdoc) {

                mysqli_query($db, "INSERT INTO tipo_documento (tdoc, desc_tdoc) VALUES ('$nom_tdoc', '$desc_tdoc')");
                print "<script>alert(\"Tipo de Documento agregado exitosamente.\");window.location='../pres/pres_tdoc.php';</script>";

            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_tdoc.php';</script>";
            }



        }
    }

    $nuevo = new tdocs();
    $nuevo -> insertar($_POST["nom_tdoc"], $_POST["desc_tdoc"]);



?>