console.log("--- Ejercicio 23 ---");

let arr = ["HTML", "CSS", "JavaScript"];
let arrOrdenado = copiaOrdenada(arr);

console.log(arr);
console.log(arrOrdenado);

function copiaOrdenada(arr) {
    let copy = [...arr];
    return copy.sort((a, b) => a > b);
}
