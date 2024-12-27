console.log("--- Ejercicio 29 ---");

/*
 * Modifica la solución de la tarea anterior, de forma que la nota
 *  utilice position:absolute en lugar de position:fixed.
 */

function positionAt(anchor, position, elem) {
    let y = anchor.getBoundingClientRect().y;
    let x = anchor.getBoundingClientRect().x;
    let b = anchor.getBoundingClientRect().bottom;
    let r = anchor.getBoundingClientRect().right;

    switch (position) {
        case "top":
            elem.style.top = y - elem.offsetHeight + "px";
            elem.style.left = x + "px";
            break;

        case "right":
            elem.style.top = y + "px";
            elem.style.left = r + "px";
            break;

        case "bottom":
            elem.style.top = b + "px";
            elem.style.left = x + "px";
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
