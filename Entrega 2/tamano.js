//Inicializar los elementos que serán manipulados

const imagen1 = document.querySelector("#cat");
const imagen2 = document.querySelector("#cat2");

// Cambiar tamaño imagen

function CambiaTamano(objeto, tamano){
    objeto.style.width = tamano;
    objeto.style.height = tamano;
}


//Poner a escuchar los eventos requeridos por cada elemento
imagen1.addEventListener("mouseover",function() {CambiaTamano(this,'240px')});
imagen1.addEventListener("mouseout", function() {CambiaTamano(this,'220px')}); 

imagen2.addEventListener("mouseover",function() {CambiaTamano(this,'240px')});
imagen2.addEventListener("mouseout", function() {CambiaTamano(this,'220px')}); 