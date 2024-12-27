console.log("--- Ejercicio 11 ---");

/*
 * Escribe una función getLastDayOfMonth(year, month) que devuelva el
 *  último día del mes dado.
 */

console.log(getLastDayOfMonth(2012, 1));

function getLastDayOfMonth(year, month) {
    let dia = new Date(year, month + 1, 0);
    return dia.getDate();
}
