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
        <div id="MenuIzq">
            <img src="Imagen/uct.png" alt="Logo Intituto Universitario" width="100px">
            <h1>Tecno-Mundo</h1>
        </div>
        <div id="MenuDer">
            <ul id="Menu"><li><a href="index.html">Inicio</a></li>
                <li><a href="Productos&Servicios.html">Productos&Servicios</a></li>
                <li><a href="Contactanos.html">Contactanos</a></li>
                <li><a href="#">Quienes Somos</a>
                    <ul><li><a href="Historia.html">Historia</a></li>
                        <li><a href="Equipo.html">Equipo</a></li>
                    </ul></li>
                
            </ul>
        </div>
    </header>
    <div class="CuerpoPagina" >
        <div id="contenedor2"> 
            <h2>Formulario de contacto</h2>
            <img src="Imagen/gatopc.jpg" height="200" alt="gato con una computadora">
            
            <form id="formulario" method="post" action="agregarComentario.php">
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
                    include("agregar.php");
                ?>
            </select>
            <div id="mostrarComentario"></div>
        </div>
        

        <script>
            const divCom = document.getElementById('Comentario');
            const sel = document.getElementById('seleccionar');
            sel.addEventListener('change', function(){
                const rutElegido = sel.value;
                fetch(`agregar.php?rut=${rutElegido}`)
                .then(respuesta => respuesta.text() )
                .then(data => {
                    mostrarComentario.innerHTML = data;
                })
            });
        </script>

    </div>
    <footer class="PiePagina">
        <p>Derechos reservados Tecno@Mundo.com </p>
    </footer>
    <!-- <script src="mijava.js"></script> -->
</body>
</html>