<?php
    session_start();
    
    // descoloco todas las variables de la sesion
    session_unset();

    // Destruyo la sesion
    session_destroy();

    header("Location:login.php");
?>