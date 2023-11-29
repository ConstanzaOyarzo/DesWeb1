<?php
    // Recibo el user y password del formulario
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Me conecto a la BD
    include("../conex.inc");

    // Armo la consulta para chequear el login
    $sql = "INSERT INTO usuarios(user, password, nombre, email)";
    $sql .= "VALUES ('$user', MD5('$pass'), '$nombre', '$email')";

    $respuesta = mysqli_query($db, $sql);

    // if ($respuesta) {
    //     echo $sql;
    // }
?>