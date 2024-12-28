console.log("--- Ejercicio 4 ---");

/*
 * Al hacer click sobre el texto Sweeties (click me)! , se debería mostrar/ocultar la lista que está debajo.
 */

let btn = document.getElementsByTagName("span")[0];
btn.addEventListener("click", moverLista);

function moverLista() {
    ul = document.getElementsByTagName("ul")[0];
    ul.hidden = !ul.hidden;
}
