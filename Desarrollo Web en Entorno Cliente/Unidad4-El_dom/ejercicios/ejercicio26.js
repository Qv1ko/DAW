console.log("--- Ejercicio 26 ---");

/*
 * Utilizando JavaScritp, coloca la pelota en el centro del campo verde.
 * El código debería funcionar con una pelota de cualquier tamaño y
 *  con cualquier tamaño de campo.
 */

const CAMPO = document.getElementById("field");
const BALON = document.getElementById("ball");

BALON.style.top = (CAMPO.clientHeight - BALON.offsetHeight) / 2 + "px";
BALON.style.left = (CAMPO.clientWidth - BALON.offsetWidth) / 2 + "px";
