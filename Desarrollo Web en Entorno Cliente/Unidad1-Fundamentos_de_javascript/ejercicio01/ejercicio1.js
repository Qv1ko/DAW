// "use strict";
console.log("--- Ejercicio 1 ---");

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
