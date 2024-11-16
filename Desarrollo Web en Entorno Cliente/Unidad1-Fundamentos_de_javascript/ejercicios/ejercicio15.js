console.log("--- Ejercicio 15 ---");

/*
 * Crea una función binario, que pida un número y escriba ese número
 *  en binario.
 */

function binary(number) {
    if (number <= 0) {
        return "0";
    }

    let result = "";

    while (number > 0) {
        result = (number % 2) + result;
        number = Math.floor(number / 2);
    }

    return result;
}
