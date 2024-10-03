console.log("--- Ejercicio 14 ---");

function dni_nie(str) {
    correct = true;
    text = "El texto pasado es ";

    if (str.length == 8) {
        text = "El DNI " + str + " es ";
    } else if (str.length == 7) {
        text = "El NIF " + str + " es ";
    } else if (str.length == 7) {
        text = "El NIE " + str + " es ";
    } else {
        correct = false;
    }

    return text + (correct ? "correcto" : "incorrecto");
}

console.log(dni_nie("a"));
