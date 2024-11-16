console.log("--- Ejercicio 4 ---");

/*
 * Crea una función multiplyNumeric(obj) que multiplique todas las
 *  propiedades numéricas de obj por 2, sin devolver nada, modifica
 *  el valor de las propiedades de obj.
 */

let menu = {
    width: 200,
    height: 300,
    title: "Mi menú",
};

function multiplyNumeric(obj) {
    for (value in obj) {
        if (typeof obj[value] === "number") {
            obj[value] *= 2;
        }
    }
}

console.log(menu);

multiplyNumeric(menu);

console.log(menu);
