<?php
    // variables $
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rut = $_POST["rut"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];

    include("conex.inc");

    $sql = "INSERT INTO comentarios (nombre, apellido, rut, telefono, correo, comentario)";
    $sql .= "VALUES ('$nombre', '$apellido', '$rut', '$telefono', '$correo', '$comentario')";
    echo "El sql es: $sql.";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo"Hemos recibido tus datos";
    }
    else {
        echo "Error al ingresar registro";
    }
    



?>