console.log("--- Ejercicio 7 ---");

/*
 * Modifica el ejercicio 5 para gestionar los eventos con el patrón
 *  de delegación de eventos, es decir, debe haber solamente un event
 *  listener en el contenedor de todos los div.
 */

for (let mensaje of document.querySelectorAll(".pane")) {
    const BTN = document.createElement("button");
    BTN.textContent = "[x]";
    BTN.classList.add("remove-button");
    BTN.style.float = "right";
    mensaje.prepend(BTN);
}

document.addEventListener("click", (e) => e.target.closest("div").remove());
