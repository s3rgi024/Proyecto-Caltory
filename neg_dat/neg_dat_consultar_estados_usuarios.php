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

    class estados_usuarios{
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM estados_usuarios";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

?>

        <table class="table table-info table-hover">
            <tr>
                <td>Código</td>
                <td>Rol</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
<?php

            while ($row = $result -> fetch_assoc()) {
                $id = stripslashes($row["id_estado"]);
                $rol = stripslashes($row["desc_estado"]);
                ?>

            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $rol;?></td>
                <td>
                    <a href="pres_actualizar_rol.php?id=<?php echo $id; ?>" class="btn btn-warning btn-sm">
					<i class="fas fa-edit"></i>
					</a>
                </td>
                <td>
                    <form method="POST" action="neg_dat_eliminar_estados_usuarios.php">
                        <?php echo "<input type='hidden' name='id_estado' value='$id_estado'>";?>
                        <button type="submit" class="btn btn-danger"  onclick="return confirmar_eliminar_rol()">
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

    $nuevo = new estados_usuarios();
    $nuevo -> consultar();


?>

    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <script src="confirmar_eliminar.js"></script>
</body>
</html>