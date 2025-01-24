console.log("--- Ejercicio 10 ---");

/*
 * Crea una página web formada por:
 * - Una lista desplegable donde se encuentre el listado de orígenes posibles y otro para los destinos.
 * - Al cargar la página web, se obtendrá del servidor el archivo viajes.json y se cargará en el
 *    primer desplegable, la lista de orígenes posibles.
 * - Una vez seleccionado uno de los orígenes, se mostrará la lista de destinos para ese origen.
 */

document.addEventListener("DOMContentLoaded", () => {
    const originList = document.getElementById("origenes");
    const destinationsList = document.getElementById("destinos");
    let destinations = {};

    fetch(new URL("./data/ejercicio10.json", window.location.href))
        .then((response) => {
            if (!response.ok) {
                throw new Error("No se pudo acceder al archivo.");
            }
            return response.json();
        })
        .then((data) => {
            data.forEach((travel) => {
                let origin = travel.ORIGEN;
                let destinyValues = Object.values(travel.DESTINOS);

                if (origin) {
                    let option = document.createElement("option");

                    option.setAttribute("value", origin);
                    option.setAttribute("id", origin);
                    option.textContent = origin;

                    originList.append(option);

                    if (destinyValues) {
                        destinyValues.map((destiny) => {
                            destinations[origin] = destiny;
                        });
                    }
                }
            });
        });

    originList.addEventListener("change", (e) => {
        destinationsList.innerHTML = "";
        if (destinations[e.target.value]) {
            destinationsList.style.display = "inline";
            destinations[e.target.value].forEach((destiny) => {
                let option = document.createElement("option");
                option.textContent = destiny;
                destinationsList.append(option);
            });
        } else {
            destinationsList.style.display = "none";
        }
    });
});
