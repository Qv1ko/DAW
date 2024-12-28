console.log("--- Ejercicio 2 ---");

/*
 * Escribe la función isEmpty(obj) que devuelva el valor true si el objeto no tiene propiedades, en
 *  caso contrario false.
 */

let schedule = {};

// function isEmpty(obj) {
//     return Object.keys(obj).length === 0;
// }

function isEmpty(obj) {
    for (let value in obj) {
        return false;
    }

    return true;
}

alert(isEmpty(schedule));

schedule["8:30"] = "Hora de levantarse";

alert(isEmpty(schedule));
