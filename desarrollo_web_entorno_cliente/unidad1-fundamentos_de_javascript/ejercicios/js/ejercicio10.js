console.log("--- Ejercicio 10 ---");

/*
 * Escribe una función que recibe un parámetro n, y muestre por consola
 *  números primos en el intervalo de 2 a n.
 */

function prime(number) {
    let text = "";

    for (let i = 2; i <= number; i++) {
        for (let j = 2; j <= i; j++) {
            if (i == j) {
                text += i + ", ";
            } else if (i % j == 0) {
                break;
            }
        }
    }

    console.log(text.replace(/, $/, "."));
}