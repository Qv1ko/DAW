console.log("--- Ejercicio 17 ---");

/*
 * Hay un árbol organizado como ramas ul/li.
 * Escribe el código que agrega a cada <li> el número de sus descendientes.
 */

liElements = document.body.getElementsByTagName("li");

for (let i = 0; i < liElements.length; i++) {
    let descendants = liElements[i].getElementsByTagName("li").length;
    liElements[i].childNodes[0].textContent +=
        descendants > 0 ? "[" + descendants + "]" : "";
}
