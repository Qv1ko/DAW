console.log("--- Ejercicio 14 A ---");

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

const input = document.getElementById("fecha");
const container = document.getElementById("c_multimedia");

input.addEventListener("change", (e) => {
    if (
        e.target.value != "" &&
        e.target.value <= new Date().toISOString().split("T")[0]
    ) {
        let xhr = new XMLHttpRequest();
        let url = new URL("https://api.nasa.gov/planetary/apod");
        url.searchParams.append("date", e.target.value);
        url.searchParams.append("api_key", "DEMO_KEY");

        xhr.open("GET", url.href);
        xhr.responseType = "json";

        xhr.addEventListener("load", function () {
            if (xhr.status === 200) {
                container.innerHTML = "";
                let image = document.createElement("img");

                image.style.width = "512px";
                image.style.height = "auto";

                image.src = xhr.response.url;
                image.alt = xhr.response.explanation;

                container.append(image);
            }
        });

        xhr.send();
    }
});
