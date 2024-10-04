console.log("--- Ejercicio 18 ---");

function almacenarEntrada() {
    let value = "";
    let values = [];

    while (true) {
        value = prompt("Ingresse un valor");
        if (isNaN(value) || value == "" || value == undefined) {
            break;
        } else {
            values.push(value);
        }
    }

    return values;
}

console.log(almacenarEntrada());
