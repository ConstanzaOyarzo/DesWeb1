<?php
    // variables $
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $rut = $_GET["rut"];
    $telefono = $_GET["telefono"];
    $correo = $_GET["correo"];
    $comentario = $_GET["comentario"];

    include("conex.inc");

    $sql = "INSERT INTO comentarios (nombre, apellido, rut, telefono, correo, comentario)";
    $sql .= "VALUES ('$nombre', '$apellido', '$rut', '$telefono', '$correo', '$comentario')";
    echo "El sql es: $sql";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo"Hemos recibido tus datos";
    }
    else {
        echo "Error al ingresar registro";
    }
    



?>