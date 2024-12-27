console.log("--- Ejercicio 18 ---");

/*
 * Crea una función que recibe cualquier número de parámetros numéricos.
 * Esta función debe devolver un objeto con dos propiedades: el valor
 *  máximo y el mínimo de los parámetros recibidos.
 */

console.log(maxAndMin(3, 6, 9, 10));
console.log(maxAndMin(9, 3));
console.log(maxAndMin(3));
console.log(maxAndMin());

function maxAndMin(...rest) {
    return {
        Maxímo: Math.max(...rest),
        Minímo: Math.min(...rest),
    };
}
