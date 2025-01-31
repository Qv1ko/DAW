console.log("--- Ejercicio 15 B ---");

/*
 * Cuando se seleccione un CIFP, se mostrarán en la tabla, los ciclos que se imparten en ese CIFP.
 *  La información está en el archivo .json. En cada fila de la tabla, habrá un botón: "Ver datos".
 * Al hacer click en el botón "Ver datos" se hará una llamada al servidor, al archivo .php pasando
 *  como parámetro el código del ciclo. El servidor devolverá el texto "No encontrado", si no se
 *  encuentra el ciclo; o un objeto con los datos del ciclo. En este último caso, los datos se
 *  mostrarán en la parte inferior de la pantalla.
 */

let ciclos;

document.addEventListener("DOMContentLoaded", loadData);

async function loadData() {
    try {
        const cifps = document.getElementById("cifp");

        reponse = await fetch(
            new URL("./data/ejercicio15b.json", window.location.href)
        );

        if (!reponse.ok) {
            throw new Error("No se pudo acceder al archivo JSON.");
        }

        ciclos = await reponse.json();

        cifps.addEventListener("change", (e) => {
            const tbody = document.getElementById("tbody");
            tbody.innerHTML = "";

            for (const ciclo of ciclos) {
                if (ciclo.cifp === e.target.value) {
                    let tr = document.createElement("tr");

                    let id = document.createElement("td");
                    let name = document.createElement("td");
                    let btnCell = document.createElement("td");

                    let btn = document.createElement("button");

                    id.textContent = ciclo.ciclo;
                    name.textContent = ciclo.desCiclo;
                    btn.textContent = "Ver datos";
                    btn.addEventListener("click", cicloInfo);

                    btnCell.append(btn);

                    tr.append(id);
                    tr.append(name);
                    tr.append(btnCell);

                    tbody.append(tr);
                }
            }
        });
    } catch (error) {
        console.error(`.⚠️ERORR: ${error}`);
    }
}

async function cicloInfo(e) {
    try {
        const div = document.getElementById("datos");

        response = await fetch(
            new URL("./php/ejercicio15b.php", window.location.href),
            {
                method: "POST",
                body: `ciclo=${e.target.parentElement.parentElement.cells[0].textContent}`,
                headers: {
                    "Content-type": "application/x-www-form-urlencoded",
                },
            }
        );

        if (!response.ok) {
            throw new Error("");
        }

        data = await response.json();

        let p = document.createElement("p");

        if (data !== "No encontrado") {
            p.innerHTML = `ID: ${data.codCiclo}<br>${data.nivel} de ${data.desCiclo}`;
        } else {
            p.textContent = data;
        }

        div.innerHTML = "";
        div.append(p);
    } catch (error) {
        console.error(`⚠️ERORR: ${error}`);
    }
}
