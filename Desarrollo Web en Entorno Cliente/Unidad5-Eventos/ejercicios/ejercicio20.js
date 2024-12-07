console.log("--- Ejercicio 20 ---");

/*
 * Vas a crear un juego de memorizar parejas. Consiste en encontrar parejas en un tablero de 12
 *  cartas, que contiene 6 cartas repetidas de los personajes de los Simpson. El juego consistirá
 *  en lo siguiente:
 * - La aplicación deberá tener una tabla con 3 filas y cuatro columnas de un color. Además, habrá
 *    un cuadro de texto con el valor 0 pero no modificable y un botón que permita reiniciar el juego.
 * - Cuando el usuario haga clic sobre una celda, se mostrará una imagen.
 * - Cuando el usuario haga clic sobre otra celda, se mostrará otra imagen.
 * - Si las dos imágenes son iguales, se mantendrá visibles y se añadirá 1 al cuadro de texto.
 * - Si las dos imágenes son diferentes, se ocultarán mostrando nuevamente el color inicial.
 * - Cuando se hayan completado las 6 parejas, se mostrará el mensaje: ¡¡GANASTE!!
 * - El botón de reiniciar el juego, cambia el orden de las cartas para volver a jugar.
 */

document.addEventListener("DOMContentLoaded", game);

// Lista de personajes para el juego (rutas de imágenes).
const CHARACTERS = [
    "./img/abraham.png",
    "./img/bart.png",
    "./img/homer.png",
    "./img/lisa.png",
    "./img/maggie.png",
    "./img/marge.png",
];

// Mezcla las imágenes duplicadas y las desordena.
let mixCharacters = (characters) =>
    characters.concat(characters).sort(() => 0.5 - Math.random());

let isProcessing = false;

function game() {
    // Mezcla las cartas
    let chars = mixCharacters(CHARACTERS);

    const ROWS = 3;
    const COLUMNS = Math.ceil(chars.length / ROWS);
    const COLOR = "#c0a902";

    let viewCards = [];
    let marker = 0;

    // Reinicia el contenido de la página
    document.body.innerHTML = "";

    // Marcador
    let markerText = document.createElement("h2");
    markerText.textContent = "Marcador: " + marker;
    document.body.appendChild(markerText);

    // Botón para reiniciar el juego
    let restartButton = document.createElement("button");
    restartButton.textContent = "Reiniciar el juego";
    restartButton.style.marginBottom = "16px";
    restartButton.addEventListener("click", game);
    document.body.appendChild(restartButton);

    // Crea el tablero
    let table = document.createElement("table");
    let row, cell;
    for (let r = 0; r < ROWS; r++) {
        row = document.createElement("tr");
        for (let c = 0; c < COLUMNS; c++) {
            cell = document.createElement("td");
            cell.style.width = "218px";
            cell.style.height = "230px";
            cell.style.backgroundColor = COLOR;

            // Evento click de una celda
            cell.addEventListener("click", function clickEvent(e) {
                if (isProcessing || e.target.style.backgroundImage) return;

                e.target.style.backgroundColor = "";
                e.target.style.backgroundImage = `url('${
                    chars[r * COLUMNS + c]
                }')`;
                viewCards.push(e.target);

                // Compara las dos cartas seleccionadas
                if (viewCards.length === 2) {
                    isProcessing = true;
                    const [CARD1, CARD2] = viewCards;

                    if (
                        CARD1.style.backgroundImage ===
                            CARD2.style.backgroundImage &&
                        CARD1 !== CARD2
                    ) {
                        // Bloquea las cartas
                        viewCards.forEach((card) =>
                            card.removeEventListener("click", clickEvent)
                        );

                        // Actualiza el marcador
                        marker++;
                        markerText.textContent = "Marcador: " + marker;

                        if (marker === 6) {
                            setTimeout(() => alert("¡¡GANASTE!!"), 33);
                        }

                        viewCards = [];
                        isProcessing = false;
                    } else {
                        // Si no coinciden, las oculta
                        setTimeout(() => {
                            CARD1.style.backgroundImage = "";
                            CARD1.style.backgroundColor = COLOR;

                            CARD2.style.backgroundImage = "";
                            CARD2.style.backgroundColor = COLOR;

                            viewCards = [];
                            isProcessing = false;
                        }, 500);
                    }
                }
            });

            row.append(cell);
        }
        table.append(row);
    }

    document.body.append(table);
}
