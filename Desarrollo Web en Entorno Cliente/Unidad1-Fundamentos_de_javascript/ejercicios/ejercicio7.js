console.log("--- Ejercicio 7 ---");

/*
 * Crea una función que muestre por la consola un “tablero de ajedrez”.
 * La función recibirá dos números como parámetro, que indica el número
 *  de filas y de columnas.
 * Si la función no recibe algún parámetro, estos tomarán por defecto
 *  el valor de 8.
 * Si la función recibe algún parámetro incorrecto (sólo se admiten
 *  valores enteros positivos), no mostrará nada por consola.
 */

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
