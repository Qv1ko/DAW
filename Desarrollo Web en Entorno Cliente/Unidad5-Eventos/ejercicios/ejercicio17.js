console.log("--- Ejercicio 17 ---");

/*
 * Crear un script que resalte la celda sobre la que está el ratón.
 * Para resaltar la celda, se le asigna/desasigna la clase highlight.
 * El ejercicio se debe hacer utilizando mouseenter y mouseleave.
 */

const TABLE = document.getElementById("table");

for (const TD of TABLE.querySelectorAll("td")) {
    TD.addEventListener("mouseenter", (event) => {
        let celda = event.target.closest("td");
        if (celda) {
            celda.classList.add("highlight");
        }
    });

    TD.addEventListener("mouseleave", (event) => {
        let celda = event.target.closest("td");
        if (celda) {
            celda.classList.remove("highlight");
        }
    });
}
