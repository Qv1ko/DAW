console.log("--- Ejercicio 3 ---");

/*
 * Escribe el código para pintar todas las celdas diagonales de rojo.
 */

let table = document.body.getElementsByTagName("table")[0];

for (let td of table.getElementsByTagName("td")) {
    if (
        td.childNodes[0].data.split("")[0] == td.childNodes[0].data.split("")[2]
    ) {
        td.style.backgroundColor = "red";
    }
}
