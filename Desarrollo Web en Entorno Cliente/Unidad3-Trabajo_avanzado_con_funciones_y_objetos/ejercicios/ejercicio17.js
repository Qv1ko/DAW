console.log("--- Ejercicio 17 ---");

/*
 * Crear la función topSalary(salaries) que devuelva el nombre de la
 *  persona mejor pagada.
 * - Si salaries es vacío, debe devolver null.
 * - Si hay varias personas con la mejor paga, devolver cualquiera
 *    de ellas.
 */

let salaries = {
    John: 100,
    Pete: 300,
    Mary: 250,
};

function topSalary(salaries) {
    let maxSalarie = null;
    for (let [key, value] of Object.entries(salaries)) {
        if (maxSalarie == null || maxSalarie[1] < value) {
            maxSalarie = [key, value];
        }
    }
    return maxSalarie[0];
}

console.log(topSalary(salaries));
