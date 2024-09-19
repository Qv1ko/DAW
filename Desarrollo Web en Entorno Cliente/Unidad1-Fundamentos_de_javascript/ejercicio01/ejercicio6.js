console.log("--- Ejercicio 6 ---");

let line = "#";
let number = prompt("Escribe un número para la base del triangulo");

if (number == "" || number == null) {
    triangle();
} else if (number > 0 && number % 1 == 0) {
    triangle(number);
}

function triangle(number = 7) {
    while (line.length <= number) {
        console.log(line);
        line += "#";
    }
}
