console.log("--- Ejercicio 2 ---");

/*
 * Modifica el código del ejercicio anterior, para que, al hacer clic
 *  en el button, desaparezca el button.
 */

let btn = document.getElementById("hider");
btn.addEventListener("click", (e) => (e.target.hidden = true));
