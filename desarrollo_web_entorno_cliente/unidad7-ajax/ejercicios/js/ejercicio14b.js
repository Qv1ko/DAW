console.log("--- Ejercicio 14 B ---");

/*
 * Haz una web que permita seleccionar una fecha y muestre la imagen del día de esa fecha.
 * La NASA tiene un portal (https://api.nasa.gov/planetary/apod) que proporciona datos accesibles a
 *  aplicaciones de los desarrolladores.
 * Algunos parámetros:
 * - Date (YYYY-MM-DD)
 * - api_key (String)
 * Devuelve un json. Algunos de los campos son:
 * - title: The title of the image.
 * - date: Date of image.
 * - url: The URL of the APOD image or video of the day.
 * - media_type: The type of media (data) returned.
 * - explanation: The supplied text explanation of the image.
 */

document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("fecha");

    input.addEventListener("change", (e) => {
        if (
            e.target.value != "" &&
            e.target.value <= new Date().toISOString().split("T")[0]
        ) {
            apiConnection(e.target.value);
        }
    });
});

async function apiConnection(date) {
    const container = document.getElementById("c_multimedia");

    let url = new URL("https://api.nasa.gov/planetary/apod");
    url.searchParams.append("date", date);
    url.searchParams.append("api_key", "DEMO_KEY");

    try {
        let response = await fetch(url.href);

        if (!response.ok) {
            throw new Error("No se pudo acceder a la API");
        }

        let data = await response.json();

        container.innerHTML = "";
        let image = document.createElement("img");

        image.style.width = "512px";
        image.style.height = "auto";

        image.src = data.url;
        image.alt = data.explanation;

        container.append(image);
    } catch (err) {
        console.error(`⚠️${err}`);
    }
}
