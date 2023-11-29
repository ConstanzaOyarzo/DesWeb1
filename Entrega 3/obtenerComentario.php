<?php
    include("conex.inc");
    $rut = $_GET["rut"];
    $sql = "SELECT comentario FROM comentarios WHERE rut = '$rut'";
    $respuesta = mysqli_query($db, $sql);
    $fila = mysqli_fetch_object($respuesta);
    echo $fila->comentario;
?>
