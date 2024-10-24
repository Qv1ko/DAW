console.log("--- Ejercicio 3 ---");

/*
 * Nos gustaría obtener un array de map.keys() en una variable y luego aplicarle métodos específicos de arrays.
 */

let map = new Map();

map.set("name", "John");

//let keys = map.keys(); // map.keys() no devuelve un array, si no un MapIterator
//keys.push("more"); // Error: keys.push no es una función

let keys = Array.from(map.keys());

keys.push("more");
