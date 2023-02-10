function confirmar_eliminar_insumo()
{
    var respuesta = confirm("¿Está seguro de eliminar este producto?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}

function confirmar_eliminar_usuario()
{
    var respuesta = confirm("¿Está seguro de eliminar este usuario?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}

function confirmar_eliminar_rol()
{
    var respuesta = confirm("¿Está seguro de eliminar este Rol?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}

function confirmar_eliminar_tdoc()
{
    var respuesta = confirm("¿Está seguro de eliminar este tipo de documento?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}
