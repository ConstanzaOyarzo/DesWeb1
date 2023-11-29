<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <form action="insertarUsuario.php" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="user">
        <label for="pass">Password:</label>
        <input type="text" name="pass">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="email">Email</label>
        <input type="email" name="email">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>