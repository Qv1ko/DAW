let cadena = "Cadena de ejemplo";

let arr = Array.from(cadena.toLowerCase().replaceAll(" ", "")).sort();

console.log(arr.join(""));
