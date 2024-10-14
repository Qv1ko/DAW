console.log("--- Ejercicio 27 ---");

let arr = [1, { ejercicio: 27, lenguaje: "javascript" }, "prueba", true];

let copiarArray = (arr) => [...arr];

let copia = copiarArray(arr);

arr.push(5);

console.log(arr);
console.log(copia);

arr[1].lenguaje = "JavaScript";

console.log(arr);
console.log(copia);

// No modifica los objetos
let copia2 = structuredClone(arr);

arr[1].dificultad = "Media";

console.log(arr);
console.log(copia2);
