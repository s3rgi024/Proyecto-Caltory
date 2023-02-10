<?php
include '../neg_dat/conexion.php';

session_start();

$usuario = $_POST['nom_usuario'];
$clave = $_POST['pass_usuario'];

$query = "SELECT COUNT(*) as contar FROM persona WHERE nom_usuario = '$usuario' AND pass_usuario = '$clave'";
$consulta = mysqli_query($db, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0 && (password_verify($clave,$array['pass_usuario']))){
    $_SESSION['username'] = $usuario;
    header("location: inicio.php");
} else{
    echo "Los datos ingresados son incorrectos";
}
/*if(isset($_POST['btnlogin']))
{
    $queryusuario = mysqli_query($conn, "SELECT * FROM login WHERE usu = '$nom_usuario'");
    $nr           = mysqli_num_rows($queryusuario);
    $buscarpass   = mysqli_fetch_array($queryusuario);

    if(($nr == 1) && (password_verify($pass_usuario,$buscarpass['pass'])))
    {
        header("location: inicio.php");
    }
    else
    {
        echo "<script>alert('Usuario o Contraseña incorrecto');window.location='index.php'</script>";
    }
}*/
?>