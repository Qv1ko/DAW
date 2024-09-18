console.log("--- Ejercicio 2 ---");

let input = prompt("Escriba un número");
let number;

if (!isNaN(input) && input != null) {
    number = parseInt(input);
    for (let i = 0; i <= 10; i++) {
        console.log(`${number} * ${i} = ${number * i}`);
    }
} else {
    alert("Error: El número tiene un valor incorrecto");
}
