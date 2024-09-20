console.log("--- Ejercicio 6 ---");

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
