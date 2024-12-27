console.log("--- Ejercicio 1 ---");

/*
 * Agrega el código para que, al hacer clic en el button, desaparezca
 *  el texto del div con id="text".
 */

let btn = document.getElementById("hider");
btn.addEventListener("click", hidden);

function hidden() {
    element = document.getElementById("text");
    element.hidden = true;
}
