console.log("-- Clase 1 --");

console.log(document);

console.log(document.body);
console.log(document.head);

document.body.style.backgroundColor = "#C2ED15";

console.log(document.body.parentElement);

console.log(document.body.previousElementSibling);

console.log(document.body.children);

console.log(document.body.childNodes);

console.log(document.body.lastChild);

console.log(document.body.children[1]);

let tabla = document.body.children[1];

let fila = tabla.lastElementChild.rows[1];

fila.textContent = "Hola";

console.log(tabla.getElementsByTagName("tr")[1]);

console.log(document.querySelectorAll("tr"));

let tr = document.querySelector("tr");

console.log(tr.closest("table"));

console.log(tr.matches("head"));

let img = document.getElementById("etiqueta");

console.log(img.id);
console.log(img.src);
console.log(img.alt);
