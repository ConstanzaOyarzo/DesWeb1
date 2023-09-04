let x = 100
// alert("Hola" + x);

function Saludar(){
    alert("Hola amigo/a");
    let titulo = document.getElementById("miTitulo");
    titulo.style.color = "red";
    titulo.innerHTML = "¿Por qué me cambias?";
}

function Desaparece(){
    let titulo = document.getElementById("pract");
    titulo.style.display = "none";
    
}