console.log("--- Ejercicio 18 ---");

/*
 * Escribe una función almacenarEntrada() que:
 * - Pida al usuario valores usando prompt y los almacene en un array.
 * - Termine de pedirlos cuando el usuario ingrese un valor no
 *    numérico, una cadena vacía, o presione “Escape”. Un cero 0 es
 *    un número válido, por favor no detengas los ingresos con el cero.
 * - Devuelve el array generado
 */

function almacenarEntrada() {
    let value = "";
    let values = [];

    while (true) {
        value = prompt("Ingrese un valor");
        if (isNaN(value) || value == "" || value == undefined) {
            break;
        }
        values.push(value);
    }

    return values;
}

console.log(almacenarEntrada());
