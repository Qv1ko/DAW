console.log("--- Ejercicio 12 ---");

/*
 * Nada más acceder a la página, se verá una tabla donde se mostrarán los diferentes viajes y su
 *  precio que cargaremos desde el fichero .json.
 * Se podrá seleccionar un viaje haciendo clic sobre la fila correspondiente, en ese momento
 *  cambiará de color.
 * Además, deben estar disponibles una serie de botones: Mostrar viajes comprados, Comprar
 *  (desactivado) y Anular viaje (desactivado). Cuyo funcionamiento será el siguiente:
 * - Al pulsar sobre Mostrar viajes comprados se visualizará una tabla con todos los viajes
 *    comprados que están almacenados en la tabla de la BD viajescomprados.
 * - Al seleccionar un viaje de la tabla se habilitará el botón de Anular viaje. Si lo pulsamos
 *    borrará dicho viaje de la tabla viajescomprados y actualizará la tabla que se muestra.
 * - Al seleccionar un viaje de la tabla se activará el botón de Comprar, si se pulsa se mostrarán
 *    unas cajas de texto donde introducir el nombre del comprador, la descripción del viaje (que
 *    se copiará de la tabla de viajes), email del destinatario, número de viajes comprados, precio
 *    final del viaje, número de tarjeta (que será de 16 números) y CSV que es un código de las
 *    tarjetas de 3 dígitos.
 * Todos los accesos a distintos archivos se deben realizar de forma asíncrona mediante AJAX
 */

// HTML elements
let displayBtn;
let loadFormBtn;
let buyBtn;
let deleteBtn;
let buyForm;

// Global variables
let travelsList;
let selectedTravel;

document.addEventListener("DOMContentLoaded", () => {
    displayBtn = document.getElementById("mostrar");
    loadFormBtn = document.getElementById("load");
    buyBtn = document.getElementById("comprar");
    deleteBtn = document.getElementById("anular");
    buyForm = document.getElementById("formularioCompra");

    // Load data
    loadTravels();
    saveTravels();

    // Buttons events
    displayBtn.addEventListener("click", displayTravels);
    loadFormBtn.addEventListener("click", loadFrom);
    buyBtn.addEventListener("click", buyTravel);
    deleteBtn.addEventListener("click", deleteTravel);
});

async function loadTravels() {
    try {
        const table = document.getElementById("idViajes");

        let response = await fetch(
            new URL("./data/ejercicio12.json", window.location.href)
        );

        if (!response.ok) {
            throw new Error("No se pudo acceder al archivo JSON.");
        }

        let data = await response.json();

        for (const travel of data.viajes) {
            const tr = document.createElement("tr");

            const desc = document.createElement("td");
            desc.textContent = travel.descripcion;

            const price = document.createElement("td");
            price.textContent = travel.precio + " €";

            tr.append(desc);
            tr.append(price);

            table.append(tr);
        }

        document.addEventListener("click", selectTravel);
    } catch (err) {
        console.error("⚠️", err);
    }
}

function selectTravel(e) {
    const tr = e.target.closest("tr");
    const table = e.target.offsetParent;

    clearbackground(document.querySelectorAll("tr"));

    disableActionButtons();

    if (table && table.id) {
        if (tr) {
            tr.style.backgroundColor = "yellow";

            selectedTravel = {
                key: tr.cells[0].textContent,
                value: tr.cells[1].textContent.split(" ")[0],
            };

            if (table.id == "idViajes") {
                loadFormBtn.disabled = false;
            } else {
                deleteBtn.disabled = false;
            }
        }

        disableForm();
    } else {
        selectedTravel = null;
    }
}

function clearbackground(tr) {
    [...tr].forEach((item) => {
        item.style.backgroundColor = "white";
    });
}

async function saveTravels() {
    try {
        let response = await fetch(
            new URL("./php/ejercicio12-read.php", window.location.href)
        );

        if (!response.ok) {
            throw new Error(
                "No se pudo acceder al conector de la base de datos."
            );
        }

        travelsList = await response.json();

        enableDisplayButton();
    } catch (err) {
        console.error(`⚠️${err}`);
    }
}

function enableActionButtons() {
    loadFormBtn.disabled = false;
    deleteBtn.disabled = false;
}

function disableActionButtons() {
    loadFormBtn.disabled = true;
    deleteBtn.disabled = true;
}

function enableDisplayButton() {
    displayBtn.disabled = false;
}

function disableDisplayButton() {
    displayBtn.disabled = true;
}

function enableForm() {
    buyForm.style.display = "block";
}

function disableForm() {
    buyForm.style.display = "none";
}

function displayTravels() {
    const table = document.getElementById("idTiposViajes");
    table.innerHTML = "";

    let isFirstLoop = true;

    for (const row of travelsList) {
        if (isFirstLoop) {
            let tr = document.createElement("tr");
            for (const key of Object.keys(travelsList[0])) {
                let th = document.createElement("th");
                th.textContent = key;
                tr.append(th);
            }
            table.append(tr);
            isFirstLoop = false;
        }

        let tr = document.createElement("tr");
        for (const item of Object.values(row)) {
            let td = document.createElement("td");
            td.textContent = item;
            tr.append(td);
        }
        table.append(tr);
    }
}

function loadFrom() {
    const descInput = document.getElementById("idDescripcion");
    const priceInput = document.getElementById("idPrecio");

    descInput.value = selectedTravel.key;
    priceInput.value = selectedTravel.value;

    enableForm();
}

async function buyTravel() {
    const buyerNameInput = document.getElementById("idnombre");
    const buyerNameExp = /^([a-zA-Z]+[ ]?)+$/;

    const descInput = document.getElementById("idDescripcion");

    const emailInput = document.getElementById("idEmail");
    const emailExp = /^[a-zA-Z0-9]+@(gmail|hotmail)\.com$/;

    const numberOfTravelsInput = document.getElementById("idDedicatoria");
    const numberOfTravelsExp = /^[1-5]$/;

    const priceInput = document.getElementById("idPrecio");

    const creditCardInput = document.getElementById("idnumero");
    const creditCardExp = /^[0-9]{16}$/;

    const csvInput = document.getElementById("idcsv");
    const csvExp = /^[0-9]{3}$/;

    let continueBuy = true;

    if (
        !buyerNameInput.value.match(buyerNameExp) ||
        !emailInput.value.match(emailExp) ||
        !numberOfTravelsInput.value.match(numberOfTravelsExp) ||
        !creditCardInput.value.match(creditCardExp) ||
        !csvInput.value.match(csvExp)
    ) {
        continueBuy = false;
    }

    buyerNameInput.style.border = buyerNameInput.value.match(buyerNameExp)
        ? "1px solid grey"
        : "1px solid red";
    emailInput.style.border = emailInput.value.match(emailExp)
        ? "1px solid grey"
        : "1px solid red";
    numberOfTravelsInput.style.border = numberOfTravelsInput.value.match(
        numberOfTravelsExp
    )
        ? "1px solid grey"
        : "1px solid red";
    creditCardInput.style.border = creditCardInput.value.match(creditCardExp)
        ? "1px solid grey"
        : "1px solid red";
    csvInput.style.border = csvInput.value.match(csvExp)
        ? "1px solid grey"
        : "1px solid red";

    if (continueBuy) {
        try {
            disableDisplayButton();

            let response = await fetch(
                new URL("./php/ejercicio12-create.php", window.location.href),
                {
                    method: "POST",
                    body: JSON.stringify({
                        nombre: buyerNameInput.value,
                        descripcion: descInput.value,
                        email: emailInput.value,
                        num: numberOfTravelsInput.value,
                        precio: priceInput.value,
                        numerotarjeta: creditCardInput.value,
                        csv: csvInput.value,
                    }),
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                    },
                }
            );

            if (!response.ok) {
                throw new Error(
                    "No se pudo acceder al conector de la base de datos."
                );
            }

            travelsList = await response.json();
        } catch (err) {
            console.error(`⚠️${err}`);
        } finally {
            enableDisplayButton();
            displayTravels();
        }
    }
}

async function deleteTravel() {
    try {
        disableDisplayButton();

        let response = await fetch(
            new URL("./php/ejercicio12-delete.php", window.location.href),
            {
                method: "POST",
                headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(selectedTravel),
            }
        );

        if (!response.ok) {
            throw new Error(
                "No se pudo acceder al conector de la base de datos."
            );
        }

        travelsList = await response.json();

        enableDisplayButton();
        displayTravels();
    } catch (err) {
        console.error(`⚠️${err}`);
    }
}
