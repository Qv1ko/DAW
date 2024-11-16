console.log("--- Ejercicio 3 ---");

/*
 * Escribe el código para sumar todos los salarios y almacenar el
 *  resultado en una variable sum.
 * Si salaries está vacío, el valor de sum será 0.
 */

let salaries = {
    John: 100,
    Ann: 160,
    Pete: 130,
};

let sum = function () {
    let total = 0;

    for (let worker in salaries) {
        total += salaries[worker];
    }

    let values = Object.values(salaries);

    for (let i = 0; i < values.length; i++) {
        total += values[i];
    }

    return total;
};

console.log(sum());

let sum2 = function () {
    let total = 0;
    let values = Object.values(salaries);

    for (let i = 0; i < values.length; i++) {
        total += values[i];
    }

    return total;
};

console.log(sum2());

let sum3 = function () {
    let total = 0;
    let values = Object.values(salaries);

    for (let value of values) {
        total += value;
    }

    return total;
};

console.log(sum3());
