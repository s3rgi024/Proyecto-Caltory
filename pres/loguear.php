<?php
include '../neg_dat/conexion.php';

session_start();

$usuario = $_POST['nom_usuario'];
$clave = $_POST['pass_usuario'];

$query = "SELECT COUNT(*) as contar FROM persona WHERE nom_usuario = '$usuario' AND pass_usuario = '$clave'";
$consulta = mysqli_query($db, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: inicio.php");
} else{
    echo "Los datos ingresados son incorrectos";
}
?>