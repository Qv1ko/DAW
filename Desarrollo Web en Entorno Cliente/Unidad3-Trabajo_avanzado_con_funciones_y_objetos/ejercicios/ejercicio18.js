console.log("--- Ejercicio 18 ---");

console.log(maxAndMin(3, 6, 9, 10));
console.log(maxAndMin(9, 3));
console.log(maxAndMin(3));
console.log(maxAndMin());

function maxAndMin(...rest) {
    return {
        Maxímo: Math.max(...rest),
        Minímo: Math.min(...rest),
    };
}
