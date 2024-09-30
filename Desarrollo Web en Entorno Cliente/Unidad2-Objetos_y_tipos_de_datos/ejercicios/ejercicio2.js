console.log("--- Ejercicio 2 ---");

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
