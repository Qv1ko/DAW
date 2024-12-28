console.log("--- Ejercicio 5 ---");

/*
 * Agrega un código que inserte un botón de cierre en la esquina superior derecha de cada
 *  mensaje (div con class="pane").
 * Al hacer click sobre ese botón, se debe eliminar el div en que está el botón.
 */

for (let mensaje of document.querySelectorAll(".pane")) {
    const BTN = document.createElement("button");
    BTN.textContent = "[x]";
    BTN.classList.add("remove-button");
    BTN.style.float = "right";
    mensaje.prepend(BTN);
    BTN.addEventListener("click", (e) => e.target.parentElement.remove());
    // BTN.addEventListener("click", (e) => e.target.closest("div").remove());
}
