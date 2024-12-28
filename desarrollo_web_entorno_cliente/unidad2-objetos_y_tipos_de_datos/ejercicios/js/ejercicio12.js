console.log("--- Ejercicio 12 ---");

/*
 * Escribe una función contarBs que tome una cadena como argumento, y devuelva el número de "B"
 *  mayúsculas que hay en la cadena.
 * A continuación, escribe una función contarCaracter, similar a contarBs, pero que su segundo
 *  argumento indica el carácter que se quiere contar (en lugar de contar "B" mayúsculas).
 */

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
