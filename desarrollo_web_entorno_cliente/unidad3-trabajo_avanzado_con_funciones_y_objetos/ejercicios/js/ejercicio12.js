console.log("--- Ejercicio 12 ---");

/*
 * Escribe una función getSecondsToday() que devuelva la cantidad de
 *  segundos transcurridos desde el comienzo del día.
 */

console.log(getSecondsToday());

function getSecondsToday() {
    let now = new Date();
    let ini = new Date(now.getFullYear(), now.getMonth(), now.getDate());

    return parseInt((now.getTime() - ini.getTime()) / 1000);
}
