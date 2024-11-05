console.log("--- Ejercicio 13 ---");

/*
 * Completa el siguiente código
 */

elemento = document.getElementById("prueba");

switch (elemento.nodeName) {
    case "INPUT":
        console.log("Es un input");
        break;

    case "LABEL":
        console.log("Es un label");
        break;

    case "BUTTON":
        console.log("Es un button");
        break;
}
