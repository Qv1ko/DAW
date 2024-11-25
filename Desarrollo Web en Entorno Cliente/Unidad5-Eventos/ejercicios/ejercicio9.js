console.log("--- Ejercicio 9 ---");

/*
 * Añade el JavaScript necesario para que, al hacer clic sobre los
 *  elementos <th>, la tabla se ordene por la columna correspondiente.
 * Cada <th> tiene un atributo que indica el tipo de datos de esa columna (sólo pueden ser "string" o "number"). La función de ordenamiento debe manejar el orden de acuerdo al tipo de datos.
 */

// Solución sin delegación de eventos

tableHeaders = document.querySelectorAll("#grid thead th");

for (const HEAD of tableHeaders) {
    HEAD.addEventListener("click", (e) => {
        let thead = e.target.parentElement;
        let column = 0;

        for (let i = 0; i < thead.children.length; i++) {
            if (
                thead.children[i].textContent.toLowerCase() ==
                e.target.textContent.toLowerCase()
            ) {
                column = i;
                break;
            }
        }

        let rows = Array.from(document.querySelectorAll("#grid tbody tr"));

        rows.sort((row1, row2) =>
            e.target.dataset.type == "string"
                ? row1.children[column].textContent >
                  row2.children[column].textContent
                : e.target.dataset.type == "number"
                ? row1.children[column].textContent -
                  row2.children[column].textContent
                : 0
        );

        let tb = document.querySelector("#grid tbody");
        tb.append(...rows);
    });
}
