<?php

class categoria{
    public function actualizar($id_categoria, $nom_categoria){
        include ("conexion.php");

        if ($id_categoria and $nom_categoria) {

            mysqli_query($db, "UPDATE categoria SET nom_categoria = '$nom_categoria' WHERE id_categoria = '$id_categoria'");

            print "<script>alert(\"Categoría Actualizada exitosamente.\");window.location='../pres/pres_categorias.php';</script>";
        } else{
            print "<script>alert(\"Error al actualizar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_categorias.php';</script>";
        }

    }
}

$nuevo = new categoria();
$nuevo -> actualizar($_POST["id_categoria"], $_POST["nom_categoria"]);

?>