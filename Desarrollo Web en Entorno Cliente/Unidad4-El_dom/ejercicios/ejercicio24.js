console.log("--- Ejercicio 24 ---");

/*
 * Crea una tabla de 5 columnas y 4 filas, con 20 colores. Cada
 * celda de la tabla tendrá un color de fondo aleatorio.
 */

setInterval(() => {
    document.body.innerHTML = "";
    colorTable(8, 8);
}, 2000);

function colorTable(rows, columns) {
    table = document.createElement("table");
    table.style.border = "2px solid black";
    for (let i = 0; i < rows; i++) {
        tr = document.createElement("tr");
        for (let i = 0; i < columns; i++) {
            td = document.createElement("td");
            hex = randColor();
            td.textContent = hex;
            td.style.backgroundColor = hex;
            td.style.width = "25px";
            td.style.height = "50px";
            tr.append(td);
        }
        table.append(tr);
    }
    document.body.append(table);
}

function randColor() {
    const DIGITS = 6;
    let color = "#";

    for (let i = 0; i < DIGITS; i++) {
        color += Math.ceil(Math.random() * 15).toString(16);
    }

    return color;
}
