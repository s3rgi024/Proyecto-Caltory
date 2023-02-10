<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>inventario_Insumos</title>
</head>
<body>

<?php

    class permisos {
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM permisos";
            

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

?>

        <table class="table table-info table-hover">
            <tr>
                <td>Tipo Documento</td>
                <td>Número de Documento</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Rol</td>
                <td>Correp</td>
                <td>Dirección</td>
                <td>Nombre de Usuario</td>
                <td>Estado</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </tr>
<?php

            while ($row = $result -> fetch_assoc()) {
                $id_permiso = stripslashes($row["id_permiso"]);
                $fk_id_persona = stripslashes($row["fk_id_persona"]);
                $fk_id_rol = stripslashes($row["fk_id_rol"]);
            
                ?>

            <tr>
                <td><?php echo $id_permiso;?></td>
                <td><?php echo $fk_id_persona;?></td>
                <td><?php echo $fk_id_rol;?></td>
                <td>
                    <a href="pres_actualizar_permisos.php?id=<?php echo $doc; ?>" class="btn btn-warning btn-sm">
					<i class="fas fa-edit"></i>
					</a>
                </td>
                <td>
                    <form method="POST" action="neg_dat_eliminar_permisos.php">
                        <?php echo "<input type='hidden' name='id_permisos' value='$tdoc'>";?>
                        <button type="submit" class="btn btn-danger"  onclick="return confirmar_eliminar_permisos()">
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

    $nuevo = new permisos();
    $nuevo -> consultar();


?>

    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <script src="confirmar_eliminar.js"></script>
</body>
</html>