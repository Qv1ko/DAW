console.log("--- Ejercicio 7 ---");

const BLACK = "#",
    WHITE = " ";
let rows = prompt("Escriba el número de filas");
let columns = prompt("Escriba el número de columnas");
let table = "";

// if (rows === "" || rows == null) {
//     table(8, 8);
// } else if (number > 0 && number % 2 === 0) {
//     table(number);
// }

tableGenerator(rows, columns);

function tableGenerator(rows, columns) {
    for (let i = 0; i < rows; i++) {
        table += "|" + (i % 2 == 0 ? BLACK : WHITE);

        for (let j = 0; j < columns - 1; j++) {
            table += table[table.length - 1] === BLACK ? WHITE : BLACK;
        }

        table += "|\n";
    }
    console.log(table);
}
