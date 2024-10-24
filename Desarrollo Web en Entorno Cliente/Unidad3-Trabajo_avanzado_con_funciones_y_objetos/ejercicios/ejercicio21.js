console.log("--- Ejercicio 21 ---");

let cadenaJSON = "[1, 2, 3, 2, 4, 6, 1]";

let arr = JSON.parse(cadenaJSON).map((number) => number * 2);

console.log(arr);
