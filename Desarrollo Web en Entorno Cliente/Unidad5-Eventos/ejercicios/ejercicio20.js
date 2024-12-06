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
 * El siguiente método te puede ayudar, permite ordenar un array aleatoriamente: array.sort(() => 0.5 - Math.random());
 */

document.addEventListener("DOMContentLoaded", game);

const CHARACTERS = [
    "./img/abraham.png",
    "./img/bart.png",
    "./img/homer.png",
    "./img/lisa.png",
    "./img/maggie.png",
    "./img/marge.png",
];
let chars = mixCharacters(CHARACTERS);

function game() {
    let table = document.createElement("table");
    const ROWS = 3;
    const COLUMNS = chars.length / ROWS;
    let row, cell;
    let viewCards = [];

    document.body.innerHTML = "";

    for (let r = 0; r < ROWS; r++) {
        row = document.createElement("tr");
        for (let c = 0; c < COLUMNS; c++) {
            cell = document.createElement("td");

            cell.style.width = "218px";
            cell.style.height = "230px";
            cell.style.backgroundColor = randColor();

            cell.addEventListener("click", function clickEvent(e) {
                // this.querySelectorAll("td").forEach(
                //     (td) => (td.style.pointerEvent = "none")
                // );
                if (
                    e.target.style.backgroundImage == "" &&
                    viewCards.length < 2
                ) {
                    e.target.style.backgroundImage =
                        "url('" + chars[r * COLUMNS + c] + "')";
                    viewCards.push(e.target);
                } else {
                    e.target.style.backgroundImage = "";
                    viewCards = viewCards.filter(
                        (card) =>
                            card.style.backgroundImage !=
                            e.target.backgroundImage
                    );
                }
                if (viewCards.length == 2) {
                    let card1 = viewCards[0];
                    let card2 = viewCards[1];
                    if (
                        card1.style.backgroundImage ==
                            card2.style.backgroundImage &&
                        card1 != card2
                    ) {
                        viewCards.forEach((card) =>
                            card.removeEventListener("click", clickEvent)
                        );
                    } else {
                        setTimeout(() => {
                            card1.style.backgroundImage = "";
                            card2.style.backgroundImage = "";
                        }, 500);
                    }
                    viewCards.length = 0;
                }
            });

            row.append(cell);
        }
        table.append(row);
    }

    document.body.append(table);
}

function mixCharacters(characters) {
    return characters
        .concat(characters.sort(() => 0.5 - Math.random()))
        .sort(() => 0.5 - Math.random());
}

function randColor() {
    const DIGITS = 6;
    let color = "#";

    for (let i = 0; i < DIGITS; i++) {
        color += Math.ceil(Math.random() * 15).toString(16);
    }

    return color;
}
