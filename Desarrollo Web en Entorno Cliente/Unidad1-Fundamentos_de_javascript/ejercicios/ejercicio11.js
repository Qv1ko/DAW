console.log("--- Ejercicio 11 ---");

// Función declarada
function min(a, b) {
    return a < b ? a : a > b ? b : "Iguales";
}

// Expresión de función
const MIN = function (a, b) {
    return a < b ? a : a > b ? b : "Iguales";
};

// Función de flecha
let min = (a, b) => (a < b ? a : a > b ? b : "Iguales");
