<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion_login</title>
</head>
<body>
<?php

class login
{
    public function Login_user($user, $pass)
    {
        session_start();

        require_once 'conexion.php';

        $db = database::conectar();
        $cont = 0;

        $sql2 = "SELECT * FROM cuentas_usuario WHERE nom_usuario = '$user' AND pass_usuario = '$pass'";
        $result2 = $db->query($sql2);

        while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
        {
            $username = stripslashes($row2["nom_usuario"]);
            $password = stripslashes($row2["pass_usuario"]);
            $foto = stripslashes($row2["foto_usu"]);
        $cont=$cont+1;
        }
        if ($cont==0)
        {
            print "<script>alert(\"Usuario y/o constraseña incorrectos.\");window.location='index.php';</script>";
        }

        if ($cont!=0)
        {
            $_SESSION['nom_usuario'] = $username;
            $_SESSION['foto_usu'] = $foto;

            $sql1 = "SELECT fk_rol FROM empleado WHERE fk_pk_nom_usuario = '$username'";
            $result1 = $db->query($sql1);

            while ($row1=$result1->fetch(PDO::FETCH_ASSOC))
            {
                $rol = stripslashes($row1["fk_rol"]);
            }

            if (@$rol === null)
            {
                print "<script>alert(\"El usuario no tiene asignado Rol\");window.location='index.php';</script>";
            }

            if (@$rol === 'Administrador')
            {
                $_SESSION['active']=1;
                header('Location:admin.php');
            }
            elseif (@$rol === 'Cliente')
            {
                $_SESSION['active']=1;
                header('Location: index.php');
            }
            elseif (@$rol === 'Operario')
            {
                $_SESSION['active']=1;
                header('Location: index.php');
            }
        }
    }
}

    $nuevo = new Login();
    $nuevo ->Login_user($_POST["user"], $_POST["password"]);
?>
</body>
</html>

