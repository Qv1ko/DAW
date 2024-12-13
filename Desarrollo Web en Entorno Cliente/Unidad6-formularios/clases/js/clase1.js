console.log("-- Clase 1 --");

document.addEventListener("DOMContentLoaded", () => {
    console.log(document.forms);

    let formulario = document.forms[0];

    console.log(formulario);
    console.log(formulario.elements);
    console.log(formulario.email);
    console.log(document.forms[0].elements.email);
});
