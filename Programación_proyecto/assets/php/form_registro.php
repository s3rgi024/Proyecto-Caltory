<?php

require_once 'insercion_registro.php';
require_once 'conexion.php';

$db=database::conectar();

    if (isset($_REQUEST['action'])) 
    {    switch ($_REQUEST['action'])

        {
            case 'registrar':
            
            $insert=new registrar();
            $insert->insertar_persona($_POST["t_doc"],$_POST["documento"],$_POST["nombre"],$_POST["2nombre"],$_POST["rol"],$_POST["apellido"],$_POST["2apellido"],$_POST["tel"],$_POST["correo"],$_POST["usuario"],$_POST["password"]);

            break;
        }
    }
?>
