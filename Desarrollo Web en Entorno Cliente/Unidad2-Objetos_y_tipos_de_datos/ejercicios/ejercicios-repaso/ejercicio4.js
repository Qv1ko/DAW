console.log("--- Ejercicio 4 ---");

/*
 * ¿Qué valor tienen las siguientes expresiones?
 */

console.log(isNaN("23")); // false, porque lo pasa el string a number
console.log(parseInt("23.45")); // 23, porque pasa el string a number
console.log(parseInt("23px")); // 23, porque corta la parte number del string y la pasa a entero
console.log(parseInt("width: 23px")); // Nan, porque hay cadenas a los dos lados del number
