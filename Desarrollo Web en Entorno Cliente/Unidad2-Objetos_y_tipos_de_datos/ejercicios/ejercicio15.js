console.log("--- Ejercicio 15 ---");

let frutas = ["Manzana", "Pera", "Naranja"];
let frutas2 = ["Manzana", "Pera", "Naranja"];

console.log(frutas == frutas2); // false, porque el son dos objetos diferentes (apuntan a diferentes espacios de memoria)

let compra = frutas;
compra.push("Plátano");

console.log(frutas == compra); // true, porque apuntan al mismo espacio de memoria
console.log(frutas.length); // 4, porque al apuntar al mismo espacio los cambios en uno también se harán en el otro objeto
