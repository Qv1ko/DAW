console.log("--- Ejercicio 3 ---");

/*
 * Crea un div que se vuelva textarea cuando es clicado.
 * El textarea permite editar HTML en <div>
 * Cuando el usuario presiona Enter o se pierde el foco, el <textarea> se vuelve <div> de nuevo, y
 *  su contenido se vuelve el HTML del <div>.
 * Nota: <textarea> debe tener class="edit"
 */

const DIV = document.getElementById("view");
const TA = document.createElement("textarea");

TA.setAttribute("class", "edit");
TA.setAttribute("rows", "4");
TA.setAttribute("cols", "50");
TA.style.display = "none";
document.body.append(TA);

DIV.addEventListener("click", entryEv);
TA.addEventListener("keydown", enterKeyEv);
TA.addEventListener("focusout", exitEv);

function entryEv(e) {
    e.target.style.display = "none";
    TA.style.display = "block";
    TA.focus();
}

function enterKeyEv(e) {
    if (e.key == "Enter") {
        exitEv(e);
    }
}

function exitEv(e) {
    let textarea = e.target;

    text = textarea.value;
    textarea.value = "";

    textarea.style.display = "none";
    DIV.style.display = "block";

    DIV.innerHTML += text;
}