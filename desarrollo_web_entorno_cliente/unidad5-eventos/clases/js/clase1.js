console.log("-- Clase 1 --");

document.addEventListener("DOMContentLoaded", inicio); // Cuando el contenido del DOM este cargado ejecuta la función inicio

function inicio() {
    function cambiaColor(elemento) {
        if (elemento.style) {
            elemento.style.backgroundColor = "red";
        } else {
            this.style.backgroundColor = "red";
        }
        console.log(event);
        console.log(event.type);
    }

    function cColor2(e) {
        e.target.style.backgroundColor = "green";
        e.target.style.color = "white";
        console.log(e);
        // return false;
        e.preventDefault();
    }

    function cambiarColor3(e) {
        e.currentTarget.style.backgroundColor = "orange";
        console.log(e);
        e.preventDefault();
    }

    let elemento = document.getElementById("p");
    elemento.onclick = cambiaColor;

    let link = document.getElementsByTagName("a");
    link[2].onclick = cColor2;
    // link[2].onclick = null

    let elem = document.getElementById("click3");
    elem.addEventListener("click", cambiarColor3);
    // elem.removeEventListener("click", cambiarColor3);
}
