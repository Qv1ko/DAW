console.log("--- Ejercicio 22 B ---");

/*
 * Crea una nueva versión del ejercicio anterior, pero utilizando la fase de capture en lugar de bubbling.
 */

document.querySelector("div").addEventListener("dblclick", comprobar, true);
document.querySelector("img").addEventListener("dblclick", comprobar, true);

function comprobar(e) {
    console.log(e.currentTarget.tagName);
    if (e.currentTarget.tagName == "IMG") {
        e.currentTarget.attributes[0].nodeValue =
            e.currentTarget.attributes[0].nodeValue == "./img/lamp_on.jpg"
                ? "./img/lamp_off.jpg"
                : "./img/lamp_on.jpg";
    }
}
