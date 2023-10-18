<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">
    <title>Contactanos</title>
</head>
<body>
    <header  class="Encabezado">
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="Productos&Servicios.html">Productos y servicios</a></li>
                    <li><a href="#">Quienes somos</a>
                        <ul>
                            <li><a href="historia.html" class="submenu_t">Historia</a></li>
                            <li><a href="equipo.html" class="submenu_t">Equipo</a></li>
                        </ul>
                    </li>
                    <li><a href="Contactanos.html">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="CuerpoPagina" >
        <div id="contenedor2"> 
            <h2>Formulario de contacto</h2>
            <img src="Imagen/gatopc.jpg" height="200" alt="gato con una computadora">
            
            <form id="formulario" method="get" action="agregarComentario.php">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido"><br>

                <label for="rut">Rut:</label>
                <input type="text" id="rut" name="rut">

                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono">
                <br>
                <label for="correo">E-mail:</label>
                <input type="email" id="correo" name="correo">
                <br>
                <label for="comentario">Comentarios:</label>
                <textarea id="comentario" name="comentario"></textarea>
                
                <input type="submit">
            </form>
        </div>

        <div id="Comentario">
            <h2>Lugar de comentarios</h2>
            <select name="" id="seleccionar">
                <?php
                    include("seleccionar.php");
                ?>
            </select>
            <div id="mostrarComentario"></div>
        </div>

    </div>
    <footer class="PiePagina">
        <p>Derechos reservados Tecno@Mundo.com </p>
    </footer>
    <script src="comentario.js"></script>
    <!-- <script src="mijava.js"></script> -->
</body>
</html>