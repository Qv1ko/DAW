console.log("--- Ejercicio 14 D ---");

/*
 * La página https://api.nasa.gov/ proporciona APIs (Application Programming
 * Onterface, interfaz de programación de aplicaciones) para proporcionar
 * información de distinto tipo.
 * Escribe el código de mostrarDatos para que esa información se muestre
 * en pantalla.
 */

document.addEventListener("DOMContentLoaded", obtenerDatos);

function obtenerDatos() {
    const NASA_API = "DEMO_KEY";
    const ruta = `https://api.nasa.gov/planetary/apod?api_key=${NASA_API}`;
    fetch(ruta)
        .then((respuesta) => respuesta.json())
        .then((resultado) => mostrarDatos(resultado));
}

function mostrarDatos(resultado) {
    title = document.getElementById("titulo");
    title.textContent = resultado.title;
    title.style.alignContent = "center";

    date = document.getElementById("fecha");
    date.textContent = resultado.date;

    description = document.getElementById("descripcion");
    description.textContent = resultado.explanation;

    imageDiv = document.getElementById("c_multimedia");
    imageDiv.innerHTML = "<img src='" + resultado.url + "'>";
}
