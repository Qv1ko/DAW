console.log("--- Ejercicio 17 ---");

/*
 * Hay un árbol organizado como ramas ul/li.
 * Escribe el código que agrega a cada <li> el número de sus descendientes.
 */

liElements = document.body.querySelectorAll("li");

liElements.forEach((li) => {
    let descendants = li.querySelectorAll("li").length;
    li.childNodes[0].data += descendants > 0 ? `[${descendants}]` : "";
});
