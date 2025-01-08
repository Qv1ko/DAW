console.log("--- Ejercicio 5 B ---");

/*
 * Crea el código necesario para esta página, de modo que:
 * - Al hacer click en el botón Borrar, se borre el contenido del textarea.
 * - Cuando el usuario escribe en el campo textarea, se guarda automáticamente su contenido en el
 *    navegador. Cuando el usuario abre la página de nuevo, encontrará el texto que estaba
 *    escribiendo en el textarea.
 */

const TEXT = document.getElementById("area");
const BTN = document.querySelector("button");

document.addEventListener("DOMContentLoaded", () => {
    updateValue(localStorage.getItem("textAreaContent"));
});
TEXT.addEventListener("change", updateStorage);
BTN.addEventListener("click", () => {
    updateValue("");
    updateStorage();
});

function updateValue(text) {
    TEXT.value = text;
}

function updateStorage() {
    localStorage.setItem("textAreaContent", TEXT.value);
}
