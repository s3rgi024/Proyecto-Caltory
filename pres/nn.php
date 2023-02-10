<?php
    

    require "crud_capas/conexion.php";
    $sql = "SELECT nom_rol FROM roles WHERE id_rol = 201";

    $xd = $db->query($sql);

    $ola = $xd->fetch_assoc();

    echo $ola['nom_rol'];

?>