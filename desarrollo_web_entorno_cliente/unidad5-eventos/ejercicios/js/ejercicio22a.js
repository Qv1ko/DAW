console.log("--- Ejercicio 22 A ---");

/*
 * A partir del archivo HTML proporcionado, escribe el JS que se pide, y contesta a la pregunta final.
 * En este ejercicio, queremos detectar si se ha hecho click sobre la imagen.
 * Este evento se tiene que detectar en el img y en el div. Cuando se detecta, tiene que aparecer un mensaje por consola que indique en qué elemento se ha detectado (el div o el img).
 * ¿En qué orden aparecen los mensajes?
 */

document.querySelector("div").addEventListener("dblclick", comprobar);
document.querySelector("img").addEventListener("dblclick", comprobar);

function comprobar(e) {
    console.log(e.currentTarget.tagName);
    if (e.currentTarget.tagName == "IMG") {
        e.currentTarget.attributes[0].nodeValue =
            e.currentTarget.attributes[0].nodeValue == "./img/lamp_on.jpg"
                ? "./img/lamp_off.jpg"
                : "./img/lamp_on.jpg";
    }
}
