console.log("--- Ejercicio 1 ---");

/*
 * Escribe una funcion unicos(arr) que recibe un array y
 * devuelve un array con los elementos únicos de arr.
 */

let values = [
    "Hare",
    "Krishna",
    "Hare",
    "Krishna",
    "Krishna",
    "Krishna",
    "Hare",
    "Hare",
    ":-O",
];
let unicos = (arr) => Array.from(new Set(arr));

alert(unicos(values)); // Hare, Krishna, :-O
