console.log("--- Ejercicio 27 ---");

let arr = [1, 2, "prueba", true];

let copiarArray = (arr) => [...arr];

let copia = copiarArray(arr);

arr.push(5);

console.log(arr);
console.log(copia);
