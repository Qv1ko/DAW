console.log("--- Ejercicio 21 ---");

/*
 * Escribe el código para ordenar la tabla por la columna "name".
 */

ordenedTable(document.querySelectorAll("table")[0], "name");

function ordenedTable(table, columnName) {
    let headerRow = table.getElementsByTagName("th");
    let column = 0;

    for (let i = 0; i < headerRow.length; i++) {
        if (
            headerRow[i].textContent.toLowerCase() == columnName.toLowerCase()
        ) {
            column = i;
            break;
        }
    }

    rows = Array.from(document.querySelectorAll("table tbody tr"));

    rows.sort(
        (row1, row2) =>
            row1.children[column].textContent >
            row2.children[column].textContent
    );

    tb = document.querySelector("table tbody");
    tb.append(...rows);
}
