console.log("--- Ejercicio 7 A ---");

/*
 * Repite el ejercicio 3, pero utilizando promesas en lugar de XMLHttpRequest.
 */

document.addEventListener("keydown", (e) => {
    const input = document.getElementById("localidad");
    const result = document.getElementById("resultado");

    if (e.key === "Enter" && input.value !== "") {
        let url = new URL("./php/ejercicio3.php", window.location.href);
        url.searchParams.set("localidad", input.value);
        fetch(url.href)
            .then((response) => {
                if (!response.ok) {
                    throw new Error("No se pudo acceder a la URL.");
                }
                return response.text();
            })
            .then((data) => {
                let response = data === "S" ? true : false;
                result.textContent = response
                    ? "La ciudad esta incluida dentro de la lista"
                    : "La ciudad no esta incluida dentro de la lista";
                result.style.color = response ? "green" : "red";
            })
            .catch((err) => {
                console.error("⚠️", err);
            });
    }
});
