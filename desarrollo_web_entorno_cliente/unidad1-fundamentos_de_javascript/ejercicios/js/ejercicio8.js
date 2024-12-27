// "use strict";
console.log("--- Ejercicio 8 ---");

/*
 * Modifica el ejercicio 1:
 * - Si se produce un error, vuelve a pedir un número.
 * - Si pulsa Cancelar, el programa termina.
 */

function ages() {
    let age;
    let text;

    while (true) {
        age = prompt("Introduce una edad");

        if (age == null) {
            break;
        }

        if (isNaN(age) || age <= 0) {
            text = "Error";
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
    }
}
