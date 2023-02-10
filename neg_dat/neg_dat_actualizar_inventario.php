<?php

    class inventario{
        public function actualizar($id_insumo, $nom_insumo, $stock, $valor_insumo, $fk_id_categoria, $nom_proveedor, $direccion_proveedor){
            include ("conexion.php");

            if ($nom_insumo and $fk_id_categoria and $valor_insumo and $nom_proveedor and $direccion_proveedor and $stock) {

                mysqli_query($db, "UPDATE inventario SET nom_insumo = '$nom_insumo', fk_id_categoria = '$fk_id_categoria', 
                valor_insumo = '$valor_insumo', nom_proveedor = '$nom_proveedor', direccion_proveedor = '$direccion_proveedor', stock = '$stock' WHERE id_insumo = '$id_insumo'");

                print "<script>alert(\"Producto/Insumo Actualizado exitosamente.\");window.location='../../pres/pres_inventario.php';</script>";
            } else{
                print "<script>alert(\"Error al actualizar datos, revise los campos e intente nuevamente.\");
                window.location='../pres/pres_inventario.php';</script>";
            }

           

        }
    }

    $nuevo = new inventario();
    $nuevo -> actualizar($_POST["id_insumo"], $_POST["nom_insumo"], $_POST["stock"], $_POST["valor_insumo"], $_POST["fk_id_categoria"], 
    $_POST["nom_proveedor"], $_POST["direccion_proveedor"]);

?>