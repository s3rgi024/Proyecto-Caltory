<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/img/caltory.ico" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="./css/inicio.css">
    <title>Inicio Sesion</title>
</head>
<body>
<img class="wave" src="./assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="./assets/img/realidad.svg">
		</div>
		<div class="login-content">
			<form action="loguear.php" method="POST">
				<img src="./assets/img/avatar.svg">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de Usuario</h5>
           		   		<input type="text" class="input" name="nom_usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="pass_usuario">
            	   </div>
            	</div>
            	<a href="#">¿Olvidaste tu contraseña?</a>
            	<input type="submit" class="btn" value="Ingresar">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./js/inicio.js"></script>
</body>
</html>