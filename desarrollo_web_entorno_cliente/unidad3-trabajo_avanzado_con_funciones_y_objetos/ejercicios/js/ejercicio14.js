console.log("--- Ejercicio 14 ---");

/*
 * Crea un programa que pida muestre el número de días que quedan desde hoy hasta el fin de
 *  curso (23 de junio).
 */

let now = new Date();
let finCurso = new Date(
    now.getMonth() > 5
        ? now.getFullYear() + 1
        : now.getMonth() == 5 && now.getDate() > 23
        ? now.getFullYear() + 1
        : now.getFullYear(),
    5,
    23
);

console.log(
    parseInt((finCurso.getTime() - now.getTime()) / (24 * 60 * 60 * 1000))
);
