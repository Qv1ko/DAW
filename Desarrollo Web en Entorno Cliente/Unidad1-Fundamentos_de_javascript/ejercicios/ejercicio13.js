console.log("--- Ejercicio 13 ---");

/*
 * Crea una función factorialIter, que calcule el factorial de un
 *  número, utilizando estructuras iterativas.
 */

const factorialIter = (number) =>
    number * (number > 1 ? factorialIter(number - 1) : 1);
