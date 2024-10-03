console.log("--- Ejercicio 12 ---");

function contarBs(str) {
    let counter = 0;

    for (let char of str.split("")) {
        if (char == "B") {
            counter++;
        }
    }

    return counter;
}

function contarCaracter(str, character) {
    let counter = 0;
    str = str.toLowerCase();
    character = character.toLowerCase();

    for (let char of str.split("")) {
        if (char == character) {
            counter++;
        }
    }

    return counter;
}
