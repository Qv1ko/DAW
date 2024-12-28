console.log("--- Ejercicio 11 ---");

/*
 * Escribe una función min(a,b) que devuelva el menor de dos números a y b.
 * Escríbela de tres modos: como función declarada, como expresión de función, y como función flecha.
 */

// Función declarada
function minDeclarada(a, b) {
    return a < b ? a : a > b ? b : "Iguales";
}

// Expresión de función
const MINEXP = function (a, b) {
    return a < b ? a : a > b ? b : "Iguales";
};

// Función de flecha
minFlecha = (a, b) => (a < b ? a : a > b ? b : "Iguales");
