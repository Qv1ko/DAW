// "use strict";
console.log("--- Ejercicio 1 ---");

/*
 * Crea un programa que pida al usuario que introduzca una edad y
 *  muestre el siguiente mensaje en función del número introducido:
 * - 0-12: Niño
 * - 13-26: Joven
 * - 26-60: Adulto
 * - >60: Jubilado
 * Dará un mensaje de error si:
 * - No se introduce ninguna edad y se pulsa Aceptar
 * - Se introduce un texto y se pulsa Aceptar
 * - Se pulsa Cancelar
 * - La edad es menor que 0
 */

let age = prompt("Introduce una edad");
let text;

if (isNaN(age) || age == null || age <= 0) {
    text = "ERROR: La edad tiene un valor incorrecto";
} else {
    if (age > 0 && age < 13) {
        text = "Niño";
    } else if (age >= 13 && age < 26) {
        text = "Joven";
    } else if (age >= 26 && age < 60) {
        text = "Adulto";
    } else {
        text = "Jubilado";
    }
}

alert(text);
