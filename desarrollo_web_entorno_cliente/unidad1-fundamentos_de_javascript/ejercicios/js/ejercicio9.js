console.log("--- Ejercicio 9 ---");

/*
 * Escribe un bucle que solicite un número mayor que 100. Si el usuario ingresa otro número pídele
 *  que ingrese un valor de nuevo.
 * El bucle debe pedir un número hasta que el usuario ingrese un número mayor que 100 o bien cancele
 *  la entrada/ingrese una linea vacía.
 */

function loop() {
    let number = prompt("Escribe un número mayor que 100");

    if (number > 100 || number == "" || number == null) {
        return;
    }

    loop();
}
