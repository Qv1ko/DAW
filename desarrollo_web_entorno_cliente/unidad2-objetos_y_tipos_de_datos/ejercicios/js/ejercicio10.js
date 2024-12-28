console.log("--- Ejercicio 10 ---");

/*
 * Crea un programa que pida al usuario un número entero por pantalla y muestre por consola:
 * - El número con 4 decimales.
 * - El número en binario.
 * - El número en octal.
 * - El número en hexadecimal.
 */

let number = +prompt("Escribe un número");

console.log(number);
console.log(number.toFixed(4));
console.log(number.toString(2));
console.log("0o" + number.toString(8));
console.log("0x" + number.toString(16));
