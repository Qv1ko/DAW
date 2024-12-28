console.log("--- Ejercicio 6 ---");

/*
 * Crea una función que muestre por la consola varias líneas que formen un triángulo.
 * La función recibirá un número como parámetro, que indica el número de # que aparecen en la última línea.
 * Si la función no recibe ningún parámetro, el parámetro toma como valor por defecto un 7.
 * Si la función recibe como parámetro un valor incorrecto (sólo se admiten valores enteros positivos), no
 *  mostrará nada por consola.
 */

let line = "#";
triangle(prompt("Escribe un número para la base del triangulo"));

// Declaración de una función
function triangle(number = 7) {
    if (number == "" || number == null) {
        number = 7;
    } else if (!number > 0 && !number % 1 == 0) {
        return;
    }
    while (line.length <= number) {
        console.log(line);
        line += "#";
    }
}

// Expresión de una función
// let triangle = function (number = 7) {
//     if (number == "" || number == null) {
//         number = 7;
//     } else if (!number > 0 && !number % 1 == 0) {
//         return;
//     }
//     while (line.length <= number) {
//         console.log(line);
//         line += "#";
//     }
// };

// Función flecha
// triangle = (number = 7) => {
//     if (number == "" || number == null) {
//         number = 7;
//     } else if (!number > 0 && !number % 1 == 0) {
//         return;
//     }
//     while (line.length <= number) {
//         console.log(line);
//         line += "#";
//     }
// };
