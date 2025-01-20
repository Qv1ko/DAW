console.log("--- Ejercicio 5 ---");

/*
 * Repite el ejercicio 1, pero utilizando promesas en lugar de XMLHttpRequest.
 */

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("url").value = window.location;
    document.getElementById("contenido").value = "";
    document.getElementById("mostrar").addEventListener("click", loadText);
});

async function loadText() {
    let url = document.getElementById("url").value;
    let textarea = document.getElementById("contenido");

    try {
        let response = await fetch(url);
        if (response.ok) {
            textarea.value = await response.text();
        } else {
            throw new Error("La URL no se a encontrado.");
        }
    } catch (error) {
        textarea.value = `⚠️${error}`;
    }
}
