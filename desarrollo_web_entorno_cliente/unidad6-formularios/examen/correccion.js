let categorias = [
    ["000", "Informática, información y obras generales"],
    ["100", "Filosofía y Psicología"],
    ["200", "Religión"],
    ["300", "Ciencias sociales"],
    ["400", "Lengua"],
    ["500", "Ciencia"],
    ["600", "Tecnología y ciencia aplicada"],
    ["700", "Arte y recreación"],
    ["800", "Literatura"],
    ["900", "Historia y geografía"],
];

document.addEventListener("DOMContentLoaded", () => {
    const SELECT = document.getElementById("categoria");
    const BTN = document.getElementById("validar");

    categorias.forEach(([id, categoria]) => {
        let option = document.createElement("option");
        option.setAttribute("id", id);
        option.textContent = categoria;
        SELECT.append(option);
    });

    if (localStorage.getItem("data")) {
        let data = JSON.parse(localStorage.getItem("data"));
        Object.entries(data).forEach(([id, value]) => {
            let item = document.getElementById(id);
            item.value = value;
        });
    }

    BTN.addEventListener("click", validar);
});

function validar() {
    const TITLE = document.getElementById("titulo");
    const TITLE_REGEX = /^([a-zA-Z]+[ ]?)+$/;
    const ISBN = document.getElementById("isbn");
    const ISBN_REGEX = /^([0-9]{10}|[0-9]{13})$/;
    const CTG = document.getElementById("categoria");

    const ERROR_MSG = document.getElementById("msgError");
    let errorMessage = [];
    let firstError = true;
    let error = false;

    if (TITLE.value == "" || !TITLE_REGEX.test(TITLE.value)) {
        error = true;
        errorMessage.push(
            TITLE.value == ""
                ? "❗El titulo esta vacío."
                : "⚠️El titulo sólo puede tener letras y espacios en blanco."
        );
        if (firstError == null) {
            firstError = TITLE;
        }
    }

    if (ISBN.value == "" || !ISBN_REGEX.test(ISBN.value)) {
        error = true;
        errorMessage.push(
            ISBN.value == ""
                ? "❗El ISBN esta vacío."
                : "⚠️El ISBN no es valido, tiene que estar formado por 10 o 13 dígitos."
        );
        if (firstError == null) {
            firstError = ISBN;
        }
    }

    if (error) {
        ERROR_MSG.innerHTML = errorMessage.join("<br>");
        firstError.focus();
    } else {
        let data = {
            titulo: TITLE.value,
            isbn: ISBN.value,
            categoria: CTG.value,
        };
        ERROR_MSG.innerHTML = "";
        localStorage.setItem("data", JSON.stringify(data));
    }
}
