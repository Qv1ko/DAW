console.log("--- Ejercicio 28 ---");

/*
 * Crea una función positionAt(anchor, position, elem) que posicione elem, respecto al elemento de referencia (anchor), dependiendo de lo indicado por position:
 * - "top": encima de anchor
 * - "right": a la derecha de anchor
 * - "bottom": debajo de anchor
 * Esta función será utilizada por showNote(elemRef, position, html) que crea un elemento "note" con el html y lo muestra.
 */

function positionAt(anchor, position, elem) {
    switch (position) {
        case "top":
            elem.style.top = anchor.offsetTop - elem.offsetHeight + "px";
            elem.style.left = anchor.offsetLeft + "px";
            break;

        case "right":
            elem.style.top = anchor.offsetTop + "px";
            elem.style.left = anchor.offsetLeft + anchor.offsetWidth + "px";
            break;

        case "bottom":
            elem.style.top = anchor.offsetTop + anchor.offsetHeight + "px";
            elem.style.left = anchor.offsetLeft + "px";
            break;

        default:
            break;
    }
}

function showNote(anchor, position, html) {
    let note = document.createElement("div");
    note.className = "note";
    note.innerHTML = html;
    document.body.append(note);

    positionAt(anchor, position, note);
}

let blockquote = document.querySelector("blockquote");

showNote(blockquote, "top", "nota encima");
showNote(blockquote, "right", "nota a la derecha");
showNote(blockquote, "bottom", "nota debajo");
