<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página inventario">
    <meta name="keywords" content="Inventario, Organizar, Yeso">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cddf3df688.js" crossorigin="anonymous"></script>
    <title>Inicio-Caltory</title>
</head>
<body>
  <div class="overlay"></div>
  <section class="container position-absolute top-50 start-50 translate-middle">
            <div class="mt-3 rounded p-5">
              <div class="row">
                <div class="col fondo d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-start">
                    <img src="is_img_f.svg" alt="inventario">
                </div>
                <div class="col bg-white p-5 rounded-end">
                    
                  <div class="row justify-content-between">
                    <div class="col-4">
                      <img src="Logotipo Caltory.png" width="90" alt="logo">
                    </div>
                    <div class="col-2">
                      <img src="Isotipo Caltory.png" width="50" alt="logo">
                    </div>
                    
                  </div>
                  <h2 class="fw-bold text-center py-5">¡Bienvenido!</h2>

                  
                  <form action="validacion.php" method="POST">
                    <div class="mb-4">
                      <label for="user" class="form-label"><i class="fas fa-user"></i> Nombre de Usuario</label>
                      <input type="text" id="user" class="form-control" name="user" id="user" placeholder="Ingrese su nombre de usuario" required>
                    </div>
                    <div class="mb-4">
                    <label for="password" class="form-label"><i class="fas fa-key"></i> Contraseña</label>
                      <input type="password" id="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña" required>
                    </div>

                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Iniciar Sesión <i class="fas fa-arrow-circle-right"></i> </button>
                    </div>

                    <a href="registro.php" class="link">
                      <div class="d-grid">
                        <button type="button" class="btn btn-primary registro">Registrarme <i class="fas fa-clipboard-list"></i> </button>
                      </div>
                    </a>

                    <div class="my-3">
                      <span><a href="recuperar_pass.php">Olvidé mi contraseña</a></span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
  </section>
</body>
</html>