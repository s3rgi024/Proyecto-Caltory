<?php
    
    $db = new mysqli('localhost', 'root', '', 'caltory');
    $db->set_charset("utf8");

    if($db->connect_error > 0){
        die('Error de Conexión [' . $db->connect_error . ']');
    }
?>