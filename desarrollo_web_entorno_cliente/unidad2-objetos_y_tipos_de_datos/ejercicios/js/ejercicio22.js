console.log("--- Ejercicio 22 ---");

/*
 * Escribe una función ordenaDecreciente(arr) que recibe un array como parámetro y lo ordena en orden
 *  decreciente matemático.
 * La función modifica el array.
 */

arr = [5, 2, 1, -10, 8];

ordenaDecreciente(arr);

console.log(arr);

function ordenaDecreciente(arr) {
    arr = arr.sort((a, b) => b - a);
}
