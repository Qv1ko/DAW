console.log("--- Ejercicio 20 ---");

/*
 * Escribe el código para insertar "<li>2</li><li>3</li>" entre dos <li>.
 */

ul = document.getElementById("ul");

ul.childNodes[1].insertAdjacentHTML("afterend", "<li>2</li><li>3</li> ");
