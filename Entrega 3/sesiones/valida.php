<?php
    //Iniciar la sesion
    session_start();

    // Recibo el user y password del formulario
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    // Me conecto a la BD
    include("../conex.inc");


    // Armo la consulta para chequear el login
    $sql = "SELECT * FROM usuarios WHERE user = '$user' AND password = MD5('$pass')";
    echo $sql;

    $respuesta = mysqli_query($db ,$sql);
    if (mysqli_num_rows($respuesta) == 0) {
        //error en usuario o password
        // echo "error";
        header('Location:login.php');
    }
    else {
        // Creamos las variables de sesion que necesitemos
        $fila = mysqli_fetch_object($respuesta);
        $_SESSION["nombre"] = $fila->nombre;
        $_SESSION["email"] = $fila->email;
        $_SESSION["user"] = $fila->user;
        // echo"Ok. Pasaste";
        // header('Location:home.php');
    }

?>