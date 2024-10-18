console.log("--- Ejercicio 17 ---");

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
