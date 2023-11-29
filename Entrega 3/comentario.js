const divCom = document.getElementById('Comentario');
const seleccionar = document.getElementById('seleccionar');
seleccionar.addEventListener('change', function(){
    const rutElegido = seleccionar.value;
    fetch(`obtenerComentario.php?rut=${rutElegido}`)
    .then(respuesta => respuesta.text() )
    .then(data => {
        mostrarComentario.innerHTML = data;
    })
});