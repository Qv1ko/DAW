console.log("--- Ejercicio 7 B ---");

/*
 * Repite el ejercicio 3, pero utilizando promesas asincronas en lugar de XMLHttpRequest.
 */

document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("localidad");

    input.addEventListener("keydown", (e) => {
        if (e.key === "Enter" && e.target.value !== "") {
            connection(e.target.value);
        }
    });
});

async function connection(location) {
    const result = document.getElementById("resultado");

    let url = new URL("./php/ejercicio3.php", window.location.href);
    url.searchParams.set("localidad", location);

    try {
        let response = await fetch(url.href);

        if (!response.ok) {
            throw new Error("No se pudo acceder a la URL.");
        }

        let data = await response.text();
        let isCorrect = data === "S" ? true : false;

        result.textContent = isCorrect
            ? "La ciudad esta incluida dentro de la lista"
            : "La ciudad no esta incluida dentro de la lista";
        result.style.color = isCorrect ? "green" : "red";
    } catch (err) {
        console.error("⚠️", err);
    }
}
