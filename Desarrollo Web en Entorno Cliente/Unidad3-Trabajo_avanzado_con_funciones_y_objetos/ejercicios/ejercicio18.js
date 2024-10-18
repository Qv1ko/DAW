console.log("--- Ejercicio 18 ---");

console.log(maxAndMin(3, 6, 9, 10));
console.log(maxAndMin(9, 3));
console.log(maxAndMin(3));

function maxAndMin(num, ...rest) {
    return {
        "Maxímo": Math.max(num, Math.max(...rest)),
        "Minímo": Math.min(num, Math.min(...rest)),
    }
}
