console.log("--- Ejercicio 21 ---");

/*
 * Escribe una función filterRange(arr, a, b) que obtenga un array
 *  arr, busque los elementos con valor mayor o igual a a y menor o
 *  igual a b y devuelva un array con los resultados.
 * La función no debe modificar el array. Debe devolver un nuevo array.
 */

arr = [5, 3, 8, 1];
let filtrado = filterRange(arr, 1, 4);

console.log(filtrado);
console.log(arr);

function filterRange(arr, a, b) {
    return arr.filter((number) => number >= a && number <= b);
}
