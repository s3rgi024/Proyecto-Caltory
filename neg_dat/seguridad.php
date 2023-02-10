<?php

    session_start();
    if ($_SESSION['logueado']!="1"){
        header("location: salir.php");
    }

?>