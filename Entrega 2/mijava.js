// Obtén el formulario y agrega un evento de envío
const formulario_con = document.getElementById("formulario");

formulario_con.addEventListener("submit", function() {

    // Obtén los valores de los campos del formulario
    const nombre = document.getElementById("nombre").value;
    const apellido = document.getElementById("apellido").value;
    const rut = document.getElementById("rut").value;
    const telefono = document.getElementById("telefono").value;
    const correo = document.getElementById("correo").value;
    const comentario = document.getElementById("comentario").value;

    // Crea un mensaje con los datos capturados
    const mensajeAlerta = `Nombre: ${nombre}\nApellido: ${apellido}\nRut: ${rut}\nTelefono: ${telefono}\nCorreo: ${correo}\nComentario: ${comentario}`;

    // Muestra los datos en una alerta
    alert(mensajeAlerta);
});