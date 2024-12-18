console.log("--- Ejercicio 4 ---");

/*
 * Crea una interfaz que permita ingresar una suma de depósito bancario y porcentaje, luego calcula
 *  cuánto será después de un periodo de tiempo determinado.
 * Cualquier modificación debe ser procesada de inmediato.
 */

const FORM = document.forms.calculator;
const GRAPH = document.getElementById("height-after");

document.addEventListener("DOMContentLoaded", updateGraph);
FORM.addEventListener("change", updateGraph);

function updateGraph() {
    let initial = FORM.elements["money"].value;
    let interest = FORM.elements["interest"].value / 100;
    let years = FORM.elements["months"].value / 12;

    let result = Math.round(initial * (1 + interest) ** years);
    let height = result / 100 + 100;
    GRAPH.style.height = height + "px";
}
