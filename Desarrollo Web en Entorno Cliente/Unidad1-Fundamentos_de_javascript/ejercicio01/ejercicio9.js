console.log("--- Ejercicio 9 ---");

function loop() {
    let number = prompt("Escribe un número mayor que 100");

    if (number > 100 || number == "" || number == null) {
        return;
    }

    loop();
}
