console.log("--- Ejercicio 11 ---");

/*
 * Crea una página HTML teniendo en cuenta contendrá un desplegable donde estén cargados los teatros
 *  que se encuentran en un fichero teatros.json. La carga de los datos se ha de realizar de forma
 *  asíncrona mediante AJAX.
 * Su funcionamiento será el siguiente:
 * - Al seleccionar un teatro del desplegable, se deben visualizar las obras que hay en cartelera
 *    en ese teatro. Para ello se hará uso del fichero cartelera.json. Se mostrará el título de la
 *    obra, el precio, la sinopsis y la imagen de la obra en campos separados. En principio se
 *    mostrará la información de la primera obra.
 * - Para poder acceder al resto de las obras de dicho teatro se mostrarán 4 botones: Primero,
 *    Anterior, Siguiente y Último”. Se debe controlar que cuando se esté en la primera obra
 *    solamente estén activos los botones de siguiente y último, etc.
 * - Al cambiar de teatro no se visualizará la información del resto de teatros, es decir, se
 *    limpiará la pantalla.
 */

let theatersDropdown;
let productionsList;
let firstButton;
let previousButton;
let nextButton;
let lastButton;
let currentTheater = null;
let currentProductionIndex = 0;

document.addEventListener("DOMContentLoaded", () => {
    theatersDropdown = document.getElementById("theaters");
    productionsList;

    firstButton = document.getElementById("first");
    previousButton = document.getElementById("previous");
    nextButton = document.getElementById("next");
    lastButton = document.getElementById("last");

    loadTheater();
    saveProductions();

    theatersDropdown.addEventListener("change", displayProductions);
    firstButton.addEventListener("click", showFirstProduction);
    previousButton.addEventListener("click", showPreviousProduction);
    nextButton.addEventListener("click", showNextProduction);
    lastButton.addEventListener("click", showLastProduction);
});

async function loadTheater() {
    try {
        const response = await fetch(
            new URL("./data/ejercicio11-teatros.json", window.location.href)
        );

        if (!response.ok) {
            throw new Error("No se pudo acceder al archivo teatros.json");
        }

        const theaters = await response.json();

        for (const theater of theaters) {
            let option = document.createElement("option");
            option.setAttribute("id", theater.teatro);
            option.setAttribute("value", theater.teatro);
            option.textContent = theater.teatro;
            theatersDropdown.append(option);
        }
    } catch (err) {
        console.error("⚠️", err);
    }
}

function saveProductions() {
    fetch(new URL("./data/ejercicio11-cartelera.json", window.location.href))
        .then((response) => {
            if (!response.ok) {
                throw new Error("No se pudo acceder al archivo cartelera.json");
            }
            return response.json();
        })
        .then((productions) => {
            let list = {};
            for (const production of productions.obras) {
                let theater = production.teatro;
                if (!list[theater.toLowerCase()]) {
                    list[theater.toLowerCase()] = [];
                }
                list[theater.toLowerCase()].push({
                    title: production.titulo,
                    price: production.precio,
                    synopsis: production.sinopsis,
                    image: `./${production.imagen}`,
                });
            }
            return list;
        })
        .then((list) => {
            productionsList = list;
        })
        .catch((err) => {
            console.error("⚠️", err);
        });
}

function displayProductions(e) {
    currentTheater = e.target.value.toLowerCase();
    currentProductionIndex = 0;
    showProduction(currentProductionIndex);
}

function showProduction(index) {
    if (
        productionsList[currentTheater] &&
        productionsList[currentTheater][index]
    ) {
        const img = document.getElementById("image");
        const title = document.getElementById("title");
        const price = document.getElementById("price");
        const synopsis = document.getElementById("synopsis");

        const production = productionsList[currentTheater][index];
        img.src = production.image;
        title.textContent = production.title;
        price.textContent = production.price + " €";
        synopsis.textContent = production.synopsis;
    }
}

function showFirstProduction() {
    currentProductionIndex = 0;
    showProduction(currentProductionIndex);
}

function showPreviousProduction() {
    if (currentProductionIndex > 0) {
        currentProductionIndex--;
        showProduction(currentProductionIndex);
    }
}

function showNextProduction() {
    if (
        productionsList[currentTheater] &&
        currentProductionIndex < productionsList[currentTheater].length - 1
    ) {
        currentProductionIndex++;
        showProduction(currentProductionIndex);
    }
}

function showLastProduction() {
    if (productionsList[currentTheater]) {
        currentProductionIndex = productionsList[currentTheater].length - 1;
        showProduction(currentProductionIndex);
    }
}
