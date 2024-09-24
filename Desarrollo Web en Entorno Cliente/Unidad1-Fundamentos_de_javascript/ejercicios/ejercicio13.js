console.log("--- Ejercicio 13 ---");

const factorialIter = (number) => number * (number > 1 ? factorialIter(number - 1) : 1);
