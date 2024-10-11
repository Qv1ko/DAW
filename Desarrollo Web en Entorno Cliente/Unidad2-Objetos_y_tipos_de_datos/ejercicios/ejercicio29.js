console.log("--- Ejercicio 29 ---");

let arr = [1, 2, 3, 4];

console.log("Números pares del array");
pares(arr);

console.log("Suma de valores: " + sum(arr));

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

function sum(arr) {
    return arr.reduce((result, number) => (result += number));
}

function delLastAddNew(arr) {
    arr.pop();
    arr.push(prompt("Añade un valor al array"));
}

function maxValue(arr) {
    return Math.max(...arr.filter((value) => !isNaN(value)));
}
