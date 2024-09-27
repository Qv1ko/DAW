console.log("--- Ejercicio 2 ---");

let schedule = {};
let valuesNum = 0;

// function isEmpty(obj) {
//     return Object.keys(obj).length === 0;
// }

function isEmpty(obj) {
    for (let value in obj) {
        valuesNum++;
    }

    return valuesNum === 0;
}

alert(isEmpty(schedule));

schedule["8:30"] = "Hora de levantarse";

alert(isEmpty(schedule));
