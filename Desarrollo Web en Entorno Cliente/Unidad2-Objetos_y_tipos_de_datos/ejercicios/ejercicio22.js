console.log("--- Ejercicio 22 ---");

let arr = [5, 2, 1, -10, 8];

ordenaDecreciente(arr);

console.log(arr);

function ordenaDecreciente(arr) {
    arr = arr.sort((a, b) => a - b);
}
