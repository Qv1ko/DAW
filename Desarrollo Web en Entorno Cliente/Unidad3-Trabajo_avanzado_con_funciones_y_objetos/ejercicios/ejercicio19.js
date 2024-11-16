console.log("--- Ejercicio 19 ---");

/*
 * Crea una función que recibe cualquier número de parámetros
 *  numéricos y devuelve su suma.
 * Si alguno de los parámetros no es número, no lo considera para la suma.
 * Si ningún parámetro fuera numérico, devuelve null.
 */

console.log(sumAll(3, 6, 9, 10));
console.log(sumAll(9, 3));
console.log(sumAll(3));
console.log(sumAll());

function sumAll(value, ...rest) {
    let result = !isNaN(value) ? value : 0;
    result += rest.reduce((acumulator, val) => {
        return (!isNaN(val) ? val : 0) + acumulator;
    }, 0);
    return result != 0 ? result : null;
}
