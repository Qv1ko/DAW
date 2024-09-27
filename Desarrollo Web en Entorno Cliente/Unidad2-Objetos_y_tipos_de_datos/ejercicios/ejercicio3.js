console.log("--- Ejercicio 3 ---");

let salaries = {
    John: 100,
    Ann: 160,
    Pete: 130,
};

let sum = function () {
    let total = 0;

    for (worker in salaries) {
        total += salaries[worker];
    }

    return total;
};

console.log(sum());
