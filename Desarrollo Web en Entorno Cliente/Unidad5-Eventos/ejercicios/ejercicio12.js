console.log("--- Ejercicio 12 ---");

/*
 * Crear una lista donde los elementos son seleccionables, simulando el comportamiento del Administrador
 *  de archivos.
 * Cuando se hace click sobre un elemento de la lista, el funcionamiento será distinto, dependiendo
 *  de si está presionada la tecla Ctlr (Cmd para Mac):
 * - Si esa tecla está seleccionada: simplemente añade o quita la clase "selected" al elemento seleccionado.
 * - Si esa tecla NO está seleccionada: quita la clase "selected" a todos los elementos de la lista
 *    que la tuvieran, y añade la clase "selected" al elemento sobre el que se ha hecho click.
 * Notas:
 * - Para esta tarea, podemos suponer que los elementos de la lista son solo de texto. No hay etiquetas anidadas.
 * - Evita la selección nativa del navegador del texto en los clics.
 */

const UL = document.getElementById("ul");
let selectedElements = [];

UL.addEventListener("click", (e) => {
    if (!e.ctrlKey) {
        for (const element of selectedElements) {
            element.classList.remove("selected");
        }
    }
    e.target.classList.add("selected");
    selectedElements.push(e.target);
});
