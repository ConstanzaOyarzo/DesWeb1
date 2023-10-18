<?php
    include("conex.inc");
    $sql = "SELECT nombre, apellido, rut, telefono, correo, comentario FROM comentarios";
    $respuesta = mysqli_query($db, $sql);
    while ($fila = mysqli_fetch_object($respuesta)) {
        echo "<option value='$fila->rut'>$fila->rut</option>";
    }
?>