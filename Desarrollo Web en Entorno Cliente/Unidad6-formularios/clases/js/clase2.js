console.log("-- Clase 2 --");

document.addEventListener("DOMContentLoaded", () => {
    // Formularios del documento
    console.log(document.forms);

    console.log(document.forms["name-formulario"]);

    let formulario = document.forms["name-formulario"];

    // Elementos del formulario
    console.log(formulario.elements);
    console.log(formulario.elements.telefono);

    // Valor de los elementos del formulario
    console.log(formulario.nombre.value);
    console.log(formulario.color.value);

    console.log(formulario.terminos.checked);
    console.log(document.querySelector("input[name='terminos']:checked"));

    // Valor checked
    formulario.fav_language.forEach((lenguage) => {
        if (lenguage.checked) {
            console.log(lenguage);
        }
    });

    console.log(formulario.genero.value);

    // Cambio de los valores
    formulario.color.value = "#0000ff";
    formulario.genero.selectedIndex = 2;
    // formulario.genero.value = "femenino";

    // Select con atributo "multiple"
    formulario
        .querySelectorAll("select#pais option:checked")
        .forEach((pais) => console.log(pais));
});
