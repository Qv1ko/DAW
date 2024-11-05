console.log("--- Ejercicio 12 ---");

/*
 * Completa el siguiente código.
 */

elemento = document.getElementById("prueba");

if (elemento.nodeType === 8) {
    console.log("Comentario");
} else if (elemento.nodeType === 1) {
    console.log("Elemento HTML");
}
