<?php

    class categoria{
        public function eliminar ($id_categoria){
            include ("conexion.php");


            mysqli_query($db, "DELETE FROM categoria WHERE id_categoria = '$id_categoria'");
            print "<script>alert(\"Categoria eliminada exitosamente.\");window.location='../pres/pres_categorias.php';</script>";   

        }
    }

    $nuevo = new categoria();
    $nuevo -> eliminar($_POST["id_categoria"]);


?>