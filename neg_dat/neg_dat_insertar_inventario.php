<?php

    class inventario{
        public function insertar ($nom_insumo, $stock, $valor_insumo, $fk_id_categoria, $nom_proveedor, $direccion_proveedor){
            include ("conexion.php");

            if ($nom_insumo and $stock and $valor_insumo and $fk_id_categoria and $nom_proveedor and $direccion_proveedor) {
                print "<script>alert(\"Producto/Insumo agregado exitosamente.\");window.location='../pres/pres_inventario.php';</script>";

                mysqli_query($db, "INSERT INTO inventario (nom_insumo, stock, valor_insumo, fk_id_categoria, nom_proveedor, direccion_proveedor)
                VALUES ('$nom_insumo', '$stock', '$valor_insumo', '$fk_id_categoria', '$nom_proveedor', '$direccion_proveedor')");

            } else{
                print "<script>alert(\"Error al insertar datos, revise los campos e intente nuevamente.\");window.location='../pres/pres_inventario.php';</script>";
                
            }
            
        }
    }

    $nuevo = new inventario();
    $nuevo -> insertar($_POST["nom_insumo"], $_POST["stock"], $_POST["valor_insumo"], $_POST["fk_id_categoria"], $_POST["nom_proveedor"], $_POST["direccion_proveedor"]);



?>