<?php

    class categoria{
        public function insertar ($id_categoria, $nom_categoria){
            include ("conexion.php");

            if ($id_categoria and $nom_categoria) {
                mysqli_query($db, "INSERT INTO categoria (id_categoria, nom_categoria) 
                VALUES ('$id_categoria', '$nom_categoria')");

                print "<script>alert(\"Categoría agregada exitosamente.\");window.location='../pres/pres_categorias.php';</script>";
            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_categorias.php';</script>";
            }

        }
    }

    $nuevo = new categoria();
    $nuevo -> insertar($_POST["id_categoria"], $_POST["nom_categoria"]);

?>