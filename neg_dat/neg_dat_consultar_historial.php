<?php

    class historial{
        public function consultar(){
            include ("conexion.php");

            $sql = "SELECT * FROM historial";

            if (!$result = $db -> query($sql)) {
                die ('Error en la consulta! [' . $db -> error . ']');
            }

?>

    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
		<thead>
            <tr>
                <div class="full-width panel-tittle text-center tittles color4">
					Historial de registros en el inventario
				</div>
            </tr>
                    
			<tr>
			    <th class="mdl-data-table__cell--non-numeric">Fecha y hora</th>
				<th>ID Registro</th>
				<th>ID insumo/producto</th>
				<th>Entrada</th>
				<th>Salida</th>
                <th>Unidades defectuosas</th>
                <th>Unidades disponibles</th>
                <th>Registrado por</th>
			</tr>
		</thead>
<?php

            while ($row = $result -> fetch_assoc()) {
                $fecha = stripslashes($row["fecha_historial"]);
                $id_historial = stripslashes($row["id_historial"]);
                $fk_id_insumo = stripslashes($row["fk_id_insumo"]);
                $entrada = stripslashes($row["entrada"]);
                $salida = stripslashes($row["salida"]);
                $fk_unidades_defectuosas = stripslashes($row["fk_unidades_defectuosas"]);
                $stock = stripslashes($row["stock"]);
                $nom_persona = stripslashes($row["nom_persona_historial"]);
                $ape_persona = stripslashes($row["apellido_persona_historial"]);
                ?>

        <tbody>
		    <tr>
				<td class="mdl-data-table__cell--non-numeric"><?php echo $fecha; ?></td>
				<td><?php echo $id_historial; ?></td>
				<td><?php echo $fk_id_insumo; ?></td>
				<td><?php echo $entrada; ?></td>
                <td><?php echo $salida; ?></td>
                <td><?php echo $fk_unidades_defectuosas; ?></td>
                <td><?php echo $stock; ?></td>
                <td><?php echo $nom_persona . ' ' . $ape_persona; ?></td>
			</tr>
        </tbody>
            <?php
            
            }
            
?>
    </table>
<?php
        }
    }

?>

<?php
    $nuevo = new historial();
    $nuevo -> consultar();


?>