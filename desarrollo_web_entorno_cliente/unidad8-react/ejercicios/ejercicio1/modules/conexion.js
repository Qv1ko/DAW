export async function apiConnection(date) {
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
