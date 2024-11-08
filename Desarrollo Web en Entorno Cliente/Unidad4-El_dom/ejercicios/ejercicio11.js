console.log("--- Ejercicio 11 ---");

/*
 * Suponiendo que elemento tiene almacenado el primer
 * elemento de la lista, escribe el código necesario
 * para almacenar en una variable la frase "Ubuntu es
 * una distribución de Linux" utilizando propiedades y/o
 * métodos del DOM, y partiendo de elemento.
 */

let elemento = document.querySelectorAll("ul li")[0];

let content = elemento.innerHTML + " es una distribución de Linux";
console.log(content);
