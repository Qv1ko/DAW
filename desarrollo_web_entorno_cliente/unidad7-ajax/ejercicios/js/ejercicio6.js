console.log("--- Ejercicio 6 ---");

/*
 * Repite el ejercicio 2, pero utilizando promesas en lugar de XMLHttpRequest.
 */

document.addEventListener("DOMContentLoaded", () => {
    fetch("./data/ejercicio2.json")
        .then((response) => {
            if (!response.ok) {
                throw new Error("No se puede acceser al archivo");
            }
            return response.json();
        })
        .then((data) => {
            const DIV = document.getElementById("contenido");
            const TABLE = document.createElement("table");

            Object.keys(data).forEach((item) => {
                let addTh = true;
                let title = document.createElement("h2");
                title.textContent = item;
                DIV.append(title);

                data[item].forEach((row) => {
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

                    Object.values(row).forEach((cell) => {
                        let td = document.createElement("td");
                        td.textContent = cell;
                        tr.append(td);
                    });

                    TABLE.append(tr);
                });
            });

            DIV.append(TABLE);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
});
