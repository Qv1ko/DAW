console.log("-- Clase 6 --");

let d = document.getElementById("example");

let estilos = getComputedStyle(d);

console.log("Ancho del elemento example: " + estilos.width);
console.log("Overflow del elemento example: " + estilos.overflow);

console.log(
    "Alto de la ventana: " + document.documentElement.clientHeight + "px"
);
console.log(
    "Ancho de la ventana: " + document.documentElement.clientWidth + "px"
);

console.log("Cordenadas de elemento:");
console.log(d.getBoundingClientRect());
