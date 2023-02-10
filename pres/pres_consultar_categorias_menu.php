
    
    <a href="pres_inventario.php" class="boton boton1">Mostrar todo</a>
    
    <?php
    class categoria {
        public function consultar_menu(){
            include ("../neg_dat/conexion.php");

            $sql = "SELECT * FROM categoria";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

            while ($row = $result -> fetch_assoc()) {
                $nom_categoria = stripslashes($row["nom_categoria"]);
                $id_categoria = stripslashes($row["id_categoria"]);
            
            ?>
                <li>
                    
                    <form action="pres_filtrar_categorias.php" method="POST">
                        <input type="hidden" name="id_categoria" value="<?php echo $id_categoria; ?>">
                        <button type="submit" class="boton1 boton">
                            <?php echo $nom_categoria; ?>
                        </button>
                    </form>
                </li>
            <?php
        }
    }
}

    $nuevo = new categoria();
    $nuevo -> consultar_menu();


    

?>