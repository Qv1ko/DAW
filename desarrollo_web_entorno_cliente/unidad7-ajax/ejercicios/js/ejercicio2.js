console.log("--- Ejercicio 2 ---");

/*
 * Partiendo del fichero JSON, muestra en una tabla toda la offormación que contiene ese fichero
 *  utilizando AJAX.
 */

document.addEventListener("DOMContentLoaded", createTable);

function createTable() {
    let xhr = new XMLHttpRequest();
    let jsonPath = "./data/ejercicio2.json";

    xhr.open("POST", jsonPath);

    xhr.addEventListener("load", () => {
        if (xhr.status == 200) {
            const DIV = document.getElementById("contenido");
            const DATA = JSON.parse(xhr.responseText);
            const TABLE = document.createElement("table");

            for (let item in DATA) {
                let addTh = true;
                let title = document.createElement("h2");
                title.textContent = item;
                DIV.append(title);

                for (let row of DATA[item]) {
                    let tr = document.createElement("tr");

                    if (addTh) {
                        let tr = document.createElement("tr");

                        Object.keys(row).forEach((key) => {
                            let th = document.createElement("th");
                            th.textContent = key;
                            tr.append(th);
                        });

                        TABLE.append(tr);
                        addTh = false;
                    }

                    for (let cel in row) {
                        let td = document.createElement("td");
                        td.textContent = row[cel];
                        tr.append(td);
                    }

                    TABLE.append(tr);
                }
            }

            DIV.append(TABLE);
        }
    });

    xhr.send();
}
