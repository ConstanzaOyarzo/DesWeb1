var contenidoA3 = document.querySelector('#Contendor_Compu')
function Traer(){
    fetch('Productos.json')
        .then( res => res.json())
        .then( datos =>{
            Lista(datos)
        })
}
function Lista(datos){
    contenidoA3.innerHTML = ''
    for(let valor of datos){
        contenidoA3.innerHTML += `
        <figure>
            <img src="${valor.Photo}" alt="Computador" width="90%">
            <figcaption>Tipo: .${valor.Informacion}</figcaption>
        </figure>
        <div id="Caracteristicas">
            <p>Precio: .${valor.Precio}</p>
            <p>Descuento: .${valor.Descuento}</p>
            <button class="BotonPag" id="${valor.Boton_de_Compra}"> Comprar</button>
        </div>
        `
    }
    // Llamado de los botones de cada producto
    const Botones = document.querySelectorAll(".BotonPag")
    Botones.forEach(Boton => {
        Boton.addEventListener("click", function() {Cambiar(this,'green');});
    });
}
function Cambiar(objeto,color) {
    if (objeto.innerHTML == 'Comprar') {
        objeto.innerHTML = 'Cancelar Encargo';
        objeto.style.backgroundColor = color;
        objeto.style.width = '200px';
        objeto.style.height = '100px';
    } else {
        objeto.innerHTML = 'Comprar';
        objeto.style.backgroundColor = '';
        objeto.style.width = '180px';
        objeto.style.height = '90px';
    }
}
Traer()