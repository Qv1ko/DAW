console.log("--- Ejercicio 17 ---");

/*
 * Escribe los comandos necesarios para:
 * - Crear un array styles con los items “Jazz” y “Blues”.
 * - Agregar “Rock-n-Roll” al final.
 * - Reemplazar el valor en el medio por “Classics”.
 * - Quitar el primer valor del array y mostrarlo.
 * - Insertar Rap y Reggae al principio del array.
 */

let styles = ["Jazz", "Blues"];
console.log(styles);

styles.push("Rock-n-Roll");
console.log(styles);

styles.splice(Math.floor(styles.length / 2), 1, "Classics");
console.log(styles);

styles.shift();
console.log(styles);

styles.unshift("Rap", "Reggae");
console.log(styles);
