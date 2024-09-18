console.log("--- Ejercicio 6 ---");

let line = "#";
let number = prompt("Escribe un número para la base del triangulo");

if (number === "" || number == null) {
    triangle(7);
} else if (number > 0 && number % 2 === 0) {
    triangle(number);
}

function triangle(number) {
    while (line.length <= number) {
        console.log(line);
        line += "#";
    }
}
