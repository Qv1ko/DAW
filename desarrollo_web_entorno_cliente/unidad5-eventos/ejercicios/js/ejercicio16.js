console.log("--- Ejercicio 16 ---");

/*
 * Crear un script que resalte la celda sobre la que está el ratón.
 * Para resaltar la celda, se le asigna/desasigna la clase highlight.
 * El ejercicio se debe hacer utilizando mouseover y mouseout.
 */

const TABLE = document.getElementById("table");

TABLE.addEventListener("mouseover", (event) => {
    let celda = event.target.closest("td");
    if (celda) {
        celda.classList.add("highlight");
    }
});

TABLE.addEventListener("mouseout", (event) => {
    let celda = event.target.closest("td");
    if (celda) {
        celda.classList.remove("highlight");
    }
});
