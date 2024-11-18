console.log("--- Ejercicio 26 ---");

/*
 * Utilizando JavaScritp, coloca la pelota en el centro del campo verde.
 * El código debería funcionar con una pelota de cualquier tamaño y con cualquier tamaño de campo.
 */

const CAMPO = document.getElementById("field");
const BALON = document.getElementById("ball");

BALON.style.top =
    parseFloat(getComputedStyle(CAMPO).height) / 2 -
    parseFloat(getComputedStyle(BALON).height) / 2 +
    "px";
BALON.style.left =
    parseFloat(getComputedStyle(CAMPO).width) / 2 -
    parseFloat(getComputedStyle(BALON).width) / 2 +
    "px";
