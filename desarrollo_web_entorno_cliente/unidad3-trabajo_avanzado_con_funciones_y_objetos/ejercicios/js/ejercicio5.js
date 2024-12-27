console.log("--- Ejercicio 5 ---");

/*
 * Escriba la función sumSalarios(salarios) que devuelva la suma de
 *  todos los salarios utilizando Object.values() y el bucle for..of.
 * Si salarios está vacío, entonces el resultado debe ser 0.
 */

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
