console.log("--- Ejercicio 5 ---");

/*
 * Dado un árbol estructura como ul/li anidado, escribir el código para que, para cada <li> muestre:
 * - Cuál es el texto que hay en el <li> (sin el subárbol)
 * - El total de <li> descendientes
 */

for (let li of document.body.getElementsByTagName("li")) {
    console.log(
        li.firstChild.textContent.trim() +
            ": " +
            li.getElementsByTagName("li").length
    );
}
