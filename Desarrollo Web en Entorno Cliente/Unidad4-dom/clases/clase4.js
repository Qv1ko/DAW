console.log("-- Clase 4 --");

let elemento = document.body.getElementsByTagName("h4")[0];

elemento.insertAdjacentHTML("beforebegin", "<h1>Titulo clase 4</h1>");
elemento.insertAdjacentHTML(
    "afterbegin",
    "<!-- Comentario usando insertAdjacentHTML -->"
);
