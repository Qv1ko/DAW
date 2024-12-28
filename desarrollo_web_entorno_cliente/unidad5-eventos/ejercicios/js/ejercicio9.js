console.log("--- Ejercicio 9 ---");

/*
 * Añade el JavaScript necesario para que, al hacer clic sobre los elementos <th>, la tabla se
 *  ordene por la columna correspondiente.
 * Cada <th> tiene un atributo que indica el tipo de datos de esa columna (sólo pueden ser "string"
 *  o "number"). La función de ordenamiento debe manejar el orden de acuerdo al tipo de datos.
 */

// Solución sin delegación de eventos

// tableHeaders = document.querySelectorAll("#grid thead th");

// for (const HEAD of tableHeaders) {
//     HEAD.addEventListener("click", ordenar(e));
// }

// Solución con delegación de eventos
document.addEventListener("click", (e) => {
    if (e.target.tagName == "TH") {
        ordenar(e);
    }
});

function ordenar(e) {
    let column = e.target.cellIndex;
    let rows = Array.from(document.querySelectorAll("#grid tbody tr"));
    let order = e.target.dataset.order;

    rows.sort((row1, row2) =>
        e.target.dataset.type == "string"
            ? order == "asc"
                ? row1.children[column].textContent >
                  row2.children[column].textContent
                : row2.children[column].textContent >
                  row1.children[column].textContent
            : order == "asc"
            ? row1.children[column].textContent -
              row2.children[column].textContent
            : row2.children[column].textContent -
              row1.children[column].textContent
    );

    e.target.dataset.order = order == "asc" ? "desc" : "asc";

    let tb = document.querySelector("#grid tbody");
    tb.append(...rows);
}
