console.log("--- Ejercicio 2 ---");

let number = Number(prompt("Escriba un número"));

if (number != null && !isNaN(number)) {
    for (let i = 0; i <= 10; i++) {
        console.log(`${number} * ${i} = ${number * i}`);
    }
} else {
    alert("Error: El número tiene un valor no valido");
}
