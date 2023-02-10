<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>inventario_Insumos</title>
</head>
<body>

<?php

    class insumos_defectuosos {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM insumos_defectuosos";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

?>

        <table class="table table-info table-hover">
            <tr>
                <td>Código</td>
                <td>Nombre</td>
                <td>Categoría</td>
                <td>Valor</td>
                <td>Entrada</td>
                <td>Última entrada</td>
                <td>Salida</td>
                <td>Última salida</td>
                <td>Stock</td>
                <td>Unidades defectuosas</td>
                <td>Proveedor</td>
                <td>Dirección Proveedor</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
<?php

            while ($row = $result -> fetch_assoc()) {
                $fk_id_insumo = stripslashes($row["fk_id_insumo"]);
                $unidades_defectuosas = stripslashes($row["unidades_defectuosas"]);
                $desc_insumo = stripslashes($row["desc_insumo"]);
            
                ?>

            <tr>
                <td><?php echo $fk_id_insumo;?></td>
                <td><?php echo $unidades_defectuosas;?></td>
                <td><?php echo $desc_insumo;?></td>
                <td>
                    <a href="pres_actualizar_insumos_defectuosos.php?id=<?php echo $id; ?>" class="btn btn-warning btn-sm">
					<i class="fas fa-edit"></i>
					</a>
                </td>
                <td>
                    <form method="POST" action="neg_dat_eliminar_insumos_defectuosos.php">
                        <?php echo "<input type='hidden' name='fk_id_insumo' value='$id'>";?>
                        <button type="submit" class="btn btn-danger"  onclick="return confirmar_eliminar_insumos_defectuosos()">
                            <li class="fas fa-trash-alt"></li>
                        </button>
                    </form>
                </td>
            </tr>
            <?php
            
            }
            
            ?>
            </table>
            <?php
        }
    }

    $nuevo = new insumos_defectuosos();
    $nuevo -> consultar();


?>

    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <script src="confirmar_eliminar.js"></script>
</body>
</html>