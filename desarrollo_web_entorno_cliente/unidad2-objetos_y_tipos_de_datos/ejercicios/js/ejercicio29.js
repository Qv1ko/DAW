console.log("--- Ejercicio 29 ---");

/*
 * Crea un array, cuyo contenido son números.
 * - Haz una función que muestre en la página los números pares que
 *    hay en el array, utilizando un for, utilizando forEach(), for..in y for..of.
 * - Haz una función que muestre en la página el resultado de sumar
 *    todos los elementos del array.
 * - Haz una función que elimine el último elemento del array, y añada
 *    otro elegido por el usuario.
 * - Haz una función que muestre el valor máximo que hay en el array.
 */

arr = [1, 2, 3, 4];

console.log("Números pares del array");
pares(arr);

console.log("Suma de valores: " + valuesSum(arr));

delLastAddNew(arr);
console.log(arr);

console.log("Valor más alto del array: " + maxValue(arr));

function pares(arr) {
    console.log("Bucle for");
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] % 2 == 0) {
            console.log(arr[i]);
        }
    }

    console.log("Bucle foreach");
    arr.forEach((number) => {
        if (number % 2 == 0) {
            console.log(number);
        }
    });

    console.log("Bucle for..in");
    for (const i in arr) {
        if (arr[i] % 2 == 0) {
            console.log(arr[i]);
        }
    }

    console.log("Bucle for..of");
    for (const number of arr) {
        if (number % 2 == 0) {
            console.log(number);
        }
    }
}

function valuesSum(arr) {
    return arr.reduce((result, number) => (result += number));
}

function delLastAddNew(arr) {
    arr.pop();
    arr.push(prompt("Añade un valor al array"));
}

function maxValue(arr) {
    return Math.max(...arr.filter((value) => !isNaN(value)));
}
