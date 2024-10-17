console.log("--- Ejercicio 5 ---");

let salarios = {
    John: 100,
    Pete: 300,
    Mary: 250,
};

alert(sumSalarios(salarios));

function sumSalarios(salarios) {
    let result = 0;

    for (let salario of Object.values(salarios)) {
        result += salario;
    }

    return result;
}
