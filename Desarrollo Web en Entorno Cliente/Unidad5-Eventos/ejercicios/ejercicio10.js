console.log("--- Ejercicio 10 ---");

/*
 * Haz que, al hacer clic en los enlaces (<a>) que están dentro del
 *  elemento con id="contents", pregunten al usuario si realmente
 *  quiere ir a esa dirección, y si no quiere ir, no se irá.
 * - Se debe utilizar delegación de eventos
 * - Dentro del <a> puede haber otra etiqueta (ej. <i>)
 */

const CONTENERDOR = document.getElementById("contents");

CONTENERDOR.addEventListener("click", (event) => {
    if (event.target.closest("a") && !confirm("¿Seguro que quieres acceder?")) {
        event.preventDefault();
    }
});
