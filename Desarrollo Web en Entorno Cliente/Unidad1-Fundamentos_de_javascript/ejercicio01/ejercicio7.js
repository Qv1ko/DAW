console.log("--- Ejercicio 7 ---");

const BLACK = "#",
    WHITE = " ";
let rows = prompt("Escriba el número de filas");
let columns = prompt("Escriba el número de columnas");
let table = "";

if ((rows == "" || rows == null) && (columns == "" || columns == null)) {
    tableGenerator();
} else if (rows == "" || rows == null) {
    tableGenerator(8, columns);
} else if (columns == "" || columns == null) {
    tableGenerator(rows);
} else if (rows > 0 && rows % 1 == 0 && columns > 0 && columns % 1 == 0) {
    tableGenerator(rows, columns);
}

function tableGenerator(rows = 8, columns = 8) {
    for (let i = 0; i < rows; i++) {
        table += "|" + (i % 2 == 0 ? BLACK : WHITE);

        for (let j = 0; j < columns - 1; j++) {
            table += table[table.length - 1] === BLACK ? WHITE : BLACK;
        }

        table += "|\n";
    }
    console.log(table);
}
