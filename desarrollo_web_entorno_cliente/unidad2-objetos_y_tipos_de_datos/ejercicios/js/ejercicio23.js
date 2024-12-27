console.log("--- Ejercicio 23 ---");

/*
 * Escribe una función copiaOrdenada(arr) que devuelva una copia del
 *  array ordenada con orden alfabético.
 * El array original no se tiene que modificar.
 */

arr = ["HTML", "CSS", "JavaScript"];
let arrOrdenado = copiaOrdenada(arr);

console.log(arr);
console.log(arrOrdenado);

function copiaOrdenada(arr) {
    let copy = [...arr];
    // let copy = arr.concat();
    // let copy = arr.slice();
    return copy.sort((a, b) => a > b);
}
