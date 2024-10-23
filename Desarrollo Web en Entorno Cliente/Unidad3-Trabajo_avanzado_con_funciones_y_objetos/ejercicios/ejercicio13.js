console.log("--- Ejercicio 13 ---");

/*
 * Crea una función getSecondsToTomorrow() que devuelva la cantidad de
 * segundos que faltan para el día de mañana.
 */

console.log(getSecondsToTomorrow());

function getSecondsToTomorrow() {
    let now = new Date();
    let ini = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);

    return parseInt((ini.getTime() - now.getTime()) / 1000);
}
