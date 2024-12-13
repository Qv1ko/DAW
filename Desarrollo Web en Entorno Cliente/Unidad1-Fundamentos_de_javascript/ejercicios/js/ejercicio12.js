console.log("--- Ejercicio 12 ---");

/*
 * Define una función recursiva esPar que compruebe si un número es
 *  par o impar.
 * La función debería aceptar un solo parámetro y devolver un boolean.
 */

let esPar = (number) => (number > 1 ? esPar(number - 2) : number == 0);
