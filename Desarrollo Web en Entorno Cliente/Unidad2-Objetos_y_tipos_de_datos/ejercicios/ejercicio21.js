console.log("--- Ejercicio 21 ---");

let arr = [5, 3, 8, 1];
let filtrado = filterRange(arr, 1, 4);

console.log(filtrado);
console.log(arr);

function filterRange(arr, a, b) {
    return arr.filter((number) => number >= a && number <= b);
}
