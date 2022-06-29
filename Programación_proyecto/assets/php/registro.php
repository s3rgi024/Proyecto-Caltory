<?php
    include_once "form_registro.php";
	include_once "conexion.php";
	$db=database::conectar();
	$sentencia = $db->query("SELECT tdoc FROM tipo_documento;");
	$documentos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    $sentencia2 = $db->query("SELECT nom_rol FROM roles;");
	$roles = $sentencia2->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página inventario">
    <meta name="keywords" content="Inventario, Organizar, Yeso">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_registro.css">
    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <title>Registro-Caltory</title>
</head>
<body>
        
        <section class="container">
            <div class="mt-3 p-4">

            <div class="row">

            <div class="col-12 bg-white rounded-top">
                <h2 class="fw-bold text-center py-1 mt-4">¿Eres un nuevo empleado?<br>Regístrate <i class="fas fa-grin-wink"></i></h2>
            </div>

                <div class="col-6 bg-white p-5 pb-0">

                    <form action="guardar.php" method="POST" autocomplete="off">

                    <div class="mb-3">
                    <label for="t_doc" class="form-label"><i class="far fa-address-card"></i> Tipo de Documento</label>
                        <select class="form-select" name="t_doc" id="t_doc">
                            <?php
                            foreach ($documentos as $key => $dato) {
                                ?>
                                    <option><?php echo $dato->tdoc; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="documento" class="form-label"><i class="fas fa-id-card"></i> Número De Documento</label>
                        <input type="number" id="documento" class="form-control" name="documento" max="9999999999" min="1000000000" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label"><i class="fas fa-user-tag"></i> Primer Nombre</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="2nombre" class="form-label"><i class="far fa-user"></i> Segundo Nombre</label>
                        <input type="text" id="2nombre" class="form-control" name="2nombre">
                    </div>

                    <div class="mb-3">
                        <label for="rol" class="form-label"><i class="fas fa-user-tag"></i> Rol</label>
                        <select class="form-select" name="rol" id="rol">
                            <?php
                            foreach ($roles as $key => $dato2) {
                                ?>
                                    <option><?php echo $dato2->nom_rol; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-6 bg-white p-5 pb-0">

                    <div class="mb-3">
                        <label for="apellido" class="form-label"><i class="fas fa-user-tag"></i> Primer Apellido</label>
                        <input type="text" id="apellido" class="form-control" name="apellido" required>
                    </div>

                    <div class="mb-3">
                        <label for="2apellido" class="form-label"><i class="far fa-user"></i> Segundo Apellido</label>
                        <input type="text" id="2apellido" class="form-control" name="2apellido">
                    </div>

                    <div class="mb-3">
                        <label for="tel" class="form-label"><i class="fas fa-phone-alt"></i> Teléfono</label>
                        <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">+57</span>
                        <input type="number" id="tel" class="form-control" name="tel" aria-labeL="teléfono" aria-describedby="basic-addon1" placeholder="--- --- ----" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                        <input type="correo" id="correo" class="form-control" name="correo" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="usuario" class="form-label"><i class="fas fa-user-circle"></i> Nombre De Usuario</label>
                        <input type="text" id="usuario" class="form-control" name="usuario" required>
                    </div>
                </div>

                <div class="col-12 bg-white pe-5 ps-5 pb-4">
                    <label for="password" class="form-label"><i class="fas fa-key"></i> Contraseña</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                </div>

                <div class="col-12 bg-white mb-3 rounded-bottom ps-5 pe-5">
                    <div class="d-grid pb-2">
                        <button type="submit" name="registro" class="btn btn-primary" onclick="this.form.action = '?action=registrar';">Registrar <i class="fas fa-arrow-circle-right"></i></button>
                    </div>

                    <a href="inicio_sesion.php" class="text-decoration-none">
                        <div class="d-grid mb-4">
                        
                            <button type="button" class="btn btn-primary link"><i class="fas fa-arrow-circle-left"></i> Volver</button>
                        
                        </div>
                    </a>
                </div>
                </form>
            </div>
        </section>
</body>
</html>