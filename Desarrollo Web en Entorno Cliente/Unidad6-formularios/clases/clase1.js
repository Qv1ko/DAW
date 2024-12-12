console.log("-- Clase 1 --");

document.addEventListener("DOMContentLoaded", init);

function init() {
    console.log(document.forms);

    formulario = document.forms[0];

    console.log(formulario);
    console.log(formulario.password);
    console.log(document.forms["password"]);
    console.log(formulario.form);
    console.log(formulario.elements);
}
