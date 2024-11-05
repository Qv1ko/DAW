console.log("--- Ejercicio 10 ---");

/*
 * Indica si la siguiente sentencia es correcta. En caso de que no
 * lo sea, qué modificación harías.
 */

// elemento.textContent + "Hola" + "<br>";
document.body.getElementsByClassName("destacado")[0].textContent =
    "Hola" + "<br>"; // Es correcta si se define el elemento
