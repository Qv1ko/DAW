console.log("--- Ejercicio 17 ---");

/*
 * Crear un script que resalte la celda sobre la que está el ratón.
 * Para resaltar la celda, se le asigna/desasigna la clase highlight.
 * El ejercicio se debe hacer utilizando mouseenter y mouseleave.
 */

const TABLE = document.getElementById("table");

for (const TD of TABLE.querySelectorAll("td")) {
    TD.addEventListener("mouseenter", () => TD.classList.add("highlight"));
    TD.addEventListener("mouseleave", () => TD.classList.remove("highlight"));
}
