console.log("--- Ejercicio 9 ---");

/*
 * Escribe dos sentencias diferentes para poder seleccionar el primer
 *  elemento del documento HTML con el selector CSS "p.destacado"
 */

console.log(document.getElementsByClassName("destacado")[0]);
console.log(document.body.querySelectorAll("p.destacado")[0]);
