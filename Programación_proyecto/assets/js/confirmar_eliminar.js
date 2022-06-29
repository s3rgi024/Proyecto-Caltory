function confirmar_eliminar()
{
    var respuesta = confirm("¿Está seguro de eliminar este producto?");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}