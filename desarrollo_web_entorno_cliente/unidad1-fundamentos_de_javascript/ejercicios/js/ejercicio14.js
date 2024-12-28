console.log("--- Ejercicio 14 ---");

/*
 * Crea una función fiboIter, que escriba los números de la serie de fibonacci, hasta esa posición (empezamos
 *  por cero), utilizando estructuras iterativas.
 */

const fiboIter = (number) =>
    number > 1
        ? fiboIter(number - 1) + fiboIter(number - 2)
        : number < 1
        ? 0
        : 1;
