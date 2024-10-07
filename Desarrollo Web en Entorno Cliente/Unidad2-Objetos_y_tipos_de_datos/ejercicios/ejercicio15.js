console.log("--- Ejercicio 15 ---");

let frutas = ["Manzana", "Pera", "Naranja"];
let frutas2 = ["Manzana", "Pera", "Naranja"];

console.log(frutas == frutas2); // false, porque son dos objetos diferentes (apuntan a diferentes direcciones de memoria)

let compra = frutas;
compra.push("Plátano");

console.log(frutas == compra); // true, porque apuntan a la mismo dirección de memoria
console.log(frutas.length); // 4, porque al apuntar al mismo espacio los cambios en uno también se harán en el otro objeto
