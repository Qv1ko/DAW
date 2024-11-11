console.log("--- Ejercicio 14 A ---");

/*
 * Repite los tres primeros apartados del ejercicio anterior utilizando el
 * método insertAdjacentHTML.
 */

let tabla = createTable(8, 8);

addRowsNumber(tabla, tabla.getElementsByTagName("tr").length);

addTitle(tabla);

function createTable(rows, columns) {
    let element = "";
    const DICTIONARY = [
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I",
        "J",
        "K",
        "L",
        "M",
        "N",
        "Ñ",
        "O",
        "P",
        "Q",
        "R",
        "S",
        "T",
        "U",
        "V",
        "W",
        "X",
        "Y",
        "Z",
    ];

    element += "<table>";

    for (let r = 0; r < rows; r++) {
        element += "<tr>";
        for (let c = 0; c < columns; c++) {
            element +=
                "<td> " +
                DICTIONARY[
                    r < DICTIONARY.length + 1
                        ? r
                        : parseInt(r % DICTIONARY.length)
                ] +
                (c + 1) +
                " </td>";
        }
        element += "</tr>";
    }

    element += "</table>";

    document.body.insertAdjacentHTML("afterbegin", element);
    // return new DOMParser().parseFromString(element, "text/html").body.childNodes[0];
    return document.querySelector("table");
}

function addRowsNumber(table, rows) {
    let element = "<th>" + rows + "</th>";
    table.insertAdjacentHTML("afterbegin", element);
}

function addTitle(table) {
    let tb =
        table.getElementsByTagName("tbody").length == 1
            ? table.getElementsByTagName("tbody")[0]
            : table.getElementsByTagName("tbody")[1];
    let title =
        "<h2>Tabla " +
        tb.getElementsByTagName("tr").length +
        "x" +
        tb.getElementsByTagName("tr")[0].getElementsByTagName("td").length +
        "</h2>";
    table.insertAdjacentHTML("beforebegin", title);
}
