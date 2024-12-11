console.log("--- Ejercicio 21 C ---");

/*
 * Crea una nueva versión del ejercicio anterior, pero utilizando el modelo de eventos en línea.
 * En este caso:
 * - Tienes que modificar el HTML, porque el script se incrusta ahí.
 * - No se puede anular la asignación de evento.
 */

function mouseEnter() {
    this.style.backgroundColor = "#0000FF";
    this.onmouseenter = "";
}

function clearColor() {
    this.style.backgroundColor = "";
}
