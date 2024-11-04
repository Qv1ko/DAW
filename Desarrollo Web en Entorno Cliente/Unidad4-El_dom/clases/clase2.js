console.log("-- Clase 2 --");

let imgElement = document.getElementsByTagName("img")[0];

let nodeImg = document.getElementById("etiqueta");

console.log(nodeImg);

let primerNodoBody = document.body.firstChild;

console.log(primerNodoBody);

console.log(primerNodoBody.nodeValue);

primerNodoBody.data = "Hola";

console.log(document.body.innerHTML);

// document.body.innerHTML = "<h1 style='background-color=yellow'>Hola</h1><p>Hasta luego</p>";

// document.body.textContent = "<h1 style='background-color=blue'>Hola</h1><p>Hasta luego</p>";

let elementoA = document.getElementsByTagName("a")[0];

console.log(elementoA.getAttribute("data-enlace"));

console.log(elementoA.dataset.enlace);
