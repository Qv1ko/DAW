console.log("--- Ejercicio 14 ---");

const fiboIter = (number) => number > 1 ? fiboIter(number - 1) + fiboIter(number - 2) : number < 1 ? 0 : 1;
