<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Glory:wght@300;400;700&display=swap">
    <title>Administrador</title>
</head>
<body>
    <header class="header">
        <div class="rol">
            <h1>Rol: Administrador</h1>
        </div>
        <section>
            <a href="inicio_sesion.php" class="boton" onclick="confirmar_cierre_sesion()">
            Cerrar Sesion
            </a>
            <div class="conte">
                <p>Bienvenido a Caltory</p>
            </div>
        </section>
    </header>
    <main>
    <h1 class="subtitulo"><strong>Eliga la opción a la que desea ingresar:</strong></h1>
    <div class="contenedor">
        <figure>
            <img src="../img/inv_entrada.jpg" alt="inventario_entrada">       
        <div class="capa">
            <h3>Inventario de Entrada</h3>
            <p>Visualice los insumos existentes</p>
            <a style="color:#fff;" href="inv_entrada.php"><strong>Entrar</strong></a>
        </div>
        </figure>
        <a href="inventario_salidas.php">
        <figure>
            <img src="../img/inv_salida.jpg" alt="inventario_salida">
            <div class="capa">
                    <h3>Inventario de Salida</h3>
                    <p>Visualice los productos disponibles</p>
            </div>
        </figure>
        </a>
        <a href="control_usuarios.php">
        <figure>
            <img src="../img/control_cuentas.jpg" alt="control_cuentas">
        <div class="capa">
            <h3>Control de Cuentas</h3>
            <p>Gestione los usuarios del sistema</p>
        </div>
        </figure>
        </a>
        <figure>
            <img src="../img/inf_personal.jpg" alt="inf_personal">
        <div class="capa">
            <h3>Información Personal</h3>
            <p>Lea o actualice su información personal</p>
            <a style="color:#fff;" href="info_personal.php"><strong>Entrar</strong></a>
        </div>
        </figure>
    </div>
    </main>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/sweetalert.js"></script>
</body>
</html>