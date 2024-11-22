console.log("--- Ejercicio 5 ---");

/*
 * Agrega un código que inserte un botón de cierre en la esquina
 *  superior derecha de cada mensaje (div con class="pane").
 * Al hacer click sobre ese botón, se debe eliminar el div en que
 *  está el botón.
 */

closeBtn = document.getElementsByClassName("remove-button")[0];
closeBtn.addEventListener("click", closeWindow);

function closeWindow() {
    this.parentElement.remove();
}
