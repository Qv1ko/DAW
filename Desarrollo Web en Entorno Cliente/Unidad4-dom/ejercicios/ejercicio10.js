console.log("--- Ejercicio 10 ---");

/*
 * Indica si la siguiente sentencia es correcta. En caso de que no lo
 *  sea, qué modificación harías.
 */

let elemento = document.body.getElementsByClassName("destacado")[0];

// elemento.textContent + "Hola" + "<br>"; // Es incorrecto porque añade todo el texto incluyendo la etiqueta
elemento.innerHTML = "Hola" + "<br>"; // La forma correcta sería con innerHTML para que interprete la etiqueta
