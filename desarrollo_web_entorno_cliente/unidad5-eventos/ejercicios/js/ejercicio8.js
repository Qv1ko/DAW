console.log("--- Ejercicio 8 ---");

/*
 * Se pide que al hacer clic sobre un texto, si tiene nodos hijos, los
 *  muestre u oculte.
 * La solución tiene dos partes:
 *  - Envuelve cada nodo de texto del árbol dentro de <span>.
 *  - Establece el manejador al nodo raíz del árbol y maneja los clics
 *     en aquellos nodos que sean  <span>.
 */

// Solución sin delegación de eventos

treeItems = document.querySelectorAll("#tree li");

for (let li of treeItems) {
    let span = document.createElement("span");
    span.textContent = li.firstChild.data.trim();
    // span.addEventListener("click", (e) => {
    //     const SUBUL = e.target.parentElement.childNodes[1];
    //     if (SUBUL) {
    //         SUBUL.hidden = !SUBUL.hidden;
    //     }
    // });
    li.firstChild.remove();
    li.prepend(span);
}

// Solución con delegación de eventos

document.addEventListener("click", (e) => {
    if (e.target.tagName == "SPAN") {
        const SUBUL = e.target.parentElement.childNodes[1];
        if (SUBUL) {
            SUBUL.hidden = !SUBUL.hidden;
        }
    }
});
