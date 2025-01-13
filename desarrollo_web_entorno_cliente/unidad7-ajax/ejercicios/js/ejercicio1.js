console.log("--- Ejercicio 1 ---");

/*
 * Qué debe hacer la página:
 * - El campo de texto, nada más cargarse la página, se muestre la URL de la misma (window.location).
 *    Ese campo se puede editar por el usuario.
 * - Al hacer clic sobre el botón, se cargará en un textarea el contenido del archivo indicado en
 *    el campo de texto.
 * - El textarea, inicialmente estará vacío.
 * - Los mensajes de error también aparecerán en el textarea.
 */

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("url").value = window.location;
    document.getElementById("contenido").value = "";
});
document.addEventListener("click", (e) => {
    if (e.target == document.getElementById("mostrar")) {
        let xhr = new XMLHttpRequest();
        let url = document.getElementById("url").value;

        xhr.open("POST", url);
        xhr.addEventListener("load", () => {
            let textarea = document.getElementById("contenido");
            textarea.value =
                xhr.status != 200 ? "ERROR: " + xhr.statusText : xhr.response;
        });

        xhr.send();
    }
});
