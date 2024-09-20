// "use strict";
console.log("--- Ejercicio 8 ---");

function ages() {
    let age = prompt("Introduce una edad");
    let text;

    if (age == null) {
        return;
    }

    if (isNaN(age) || age <= 0) {
        ages();
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
    return;
}
