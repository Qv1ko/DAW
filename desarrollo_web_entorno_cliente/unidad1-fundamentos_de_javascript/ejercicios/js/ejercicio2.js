console.log("--- Ejercicio 2 ---");

/*
 * Crea un programa que pida al usuario un número y escriba en la consola la tabla de multiplicar
 *  de ese número.
 */

let input = prompt("Escriba un número");
let number;

if (!isNaN(input) && input != null) {
    number = parseInt(input);
    for (let i = 0; i <= 10; i++) {
        console.log(`${number} * ${i} = ${number * i}`);
    }
} else {
    alert("Error: El número tiene un valor incorrecto");
}
