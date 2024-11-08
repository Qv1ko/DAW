console.log("--- Ejercicio 14 ---");

/*
 * Crear una tabla
 * - Crea una función que recibe como parámetros dos números (número de filas
 *   y número de columnas).
 *   - En la función se crea una tabla de esas filas y esas columnas. Cada celda
 *     tendrá algo de contenido de texto.
 *   - La tabla se "engancha" al árbol del DOM, al colocarla como hija del body.
 *   - La función devolverá un puntero al elemento del DOM asociado a la tabla.
 * - Crea una función a la que pasas como parámetro un puntero a la tabla y el
 *   número de columnas que tiene la tabla.
 *   - La función insertará, al principio de la tabla, una fila con ese número
 *     de columnas.
 * - Crea una función a la que pasas como parámetro un puntero a la tabla.
 *   - La función insertará, antes de la tabla, un elemento de tipo cabecera (h1,
 *     h2, ...) con un texto.
 * - Crea una función a la que pasas como parámetro un puntero a la tabla y un
 *   número de fila.
 *   - La función eliminará esa fila de la tabla.
 * - Crea una función a la que pasas como parámetro un puntero a la tabla.
 *   - La función creará otra tabla igual a la que se pasa como parámetro, y la
 *     colocará detrás de la tabla que ya existe.
 */

let tabla = tableFormat(8, 8);

addRowsNumber(tabla, tabla.getElementsByTagName("tr").length);

addTitle(tabla);

deleteRow(tabla, 3);

cloneTable(tabla);

deleteRow(tabla, 1);

function tableFormat(rows, columns) {
    let table = document.createElement("table");
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
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "ñ",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z",
    ];

    for (let r = 0; r < rows; r++) {
        let row = document.createElement("tr");
        table.append(row);

        for (let c = 0; c < columns; c++) {
            let column = document.createElement("td");
            column.textContent =
                " " +
                DICTIONARY[
                    r < DICTIONARY.length + 1
                        ? r
                        : parseInt(r % DICTIONARY.length)
                ] +
                (c + 1) +
                " ";
            row.append(column);
        }
    }
    document.body.append(table);
    return table;
}

function addRowsNumber(table, rows) {
    let newRow = document.createElement("th");
    newRow.textContent = rows;
    table.prepend(newRow);
}

function addTitle(table) {
    let title = document.createElement("h2");
    title.textContent =
        "Tabla " +
        table.getElementsByTagName("tr").length +
        "x" +
        table.getElementsByTagName("tr")[0].getElementsByTagName("td").length;
    table.before(title);
}

function deleteRow(table, row) {
    table.getElementsByTagName("tr")[row - 1].remove();
}

function cloneTable(table) {
    table.after(table.cloneNode(true));
}
