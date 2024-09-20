console.log("--- Ejercicio 12 ---");

let esPar = (number) => number > 1 ? esPar(number - 2) : number == 0;
