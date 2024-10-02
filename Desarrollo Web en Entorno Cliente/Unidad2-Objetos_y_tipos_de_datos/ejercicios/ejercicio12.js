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

    for (let char of str.split("")) {
        if (char == character || char == character.toLowerCase()) {
            counter++;
        }
    }

    return counter;

}
