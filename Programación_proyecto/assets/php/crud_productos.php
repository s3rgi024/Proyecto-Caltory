<?php

    require_once "conexion.php";
    class crud_productos
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

        public function insertar_producto( $nombre_prod, $precio, $cant_disp, $categoria, $fecha_ingreso)
        {

            $sql = "INSERT INTO  productos (nom_producto, valor_producto, cant_prod_disp, fk_tipo_prod, fecha_ingreso_prod) VALUES ('$nombre_prod', '$precio', '$cant_disp', '$categoria', '$fecha_ingreso')";

            $this->pdo->query($sql);

                print "<script>alert(\"Producto agregado exitosamente.\");window.location='inventario_salidas.php';</script>";

        }

        public function actualizar_producto($nombre_prod, $precio, $cant_disp, $categoria, $fecha_ingreso, $cod)
        {
            $sql = "UPDATE productos SET
            nom_producto = '$nombre_prod',
            valor_producto = '$precio',
            cant_prod_disp = '$cant_disp',
            fk_tipo_prod = '$categoria',
            fecha_ingreso_prod = '$fecha_ingreso'
            WHERE cod_producto = '$cod'";
            $this->pdo->query($sql);

            print "<script>alert(\"Producto actualizado exitosamente.\");window.location='inventario_salidas.php';</script>";
        }

        public function borrar_producto($cod)
        {
            $sql = "DELETE FROM productos WHERE cod_producto = '$cod'";

            $this->pdo->query($sql);

            print "<script>alert(\"Producto eliminado exitosamente.\");window.location='inventario_salidas.php';</script>";

        }

    }

?>