document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("btn");
    const container = document.getElementById("container");

    btn.addEventListener("click", async function (e) {
        e.preventDefault();
        // try {
        response = await fetch(
            new URL("../controllers/raceController.php", window.location)
        );

        if (!response.ok) {
            throw new Error(
                "Hubo un error al crear la carrera, contacte con el desarrollador"
            );
        }

        data = await response.json();

        points = [30, 26, 22, 18, 14, 10, 6, 4, 2, 1];
        results = {};
        submit = {};

        for (let i = 0; i < 10; i++) {
            selectDriver = randPosition(data.length);
            driver = data[selectDriver].name;
            id = data.splice(selectDriver, 1)[0].id;

            if (!results[driver]) {
                results[driver] = points[i];
                submit[id] = results[driver];
            } else {
                i--;
            }
        }

        await fetch(
            new URL("../controllers/raceController.php", window.location),
            {
                method: "POST",
                body: JSON.stringify(submit),
                headers: {
                    "Content-Type": "application/json",
                },
            }
        );

        container.innerHTML = "";
        container.setAttribute("class", "table-container");

        resultsTable = document.createElement("table");
        thead = document.createElement("thead");
        tbody = document.createElement("tbody");

        tr = document.createElement("tr");
        th = document.createElement("th");
        th.innerHTML = "Posición";
        tr.appendChild(th);

        th = document.createElement("th");
        th.innerHTML = "Nombre del Piloto";
        tr.appendChild(th);

        th = document.createElement("th");
        th.innerHTML = "Puntos Conseguidos";
        tr.appendChild(th);

        thead.appendChild(tr);

        position = 1;

        for (let driver in results) {
            tr = document.createElement("tr");
            td = document.createElement("td");
            td.innerHTML = position;
            position++;
            tr.appendChild(td);

            td = document.createElement("td");
            td.innerHTML = driver;
            tr.appendChild(td);

            td = document.createElement("td");
            td.innerHTML = results[driver];
            tr.appendChild(td);

            tbody.appendChild(tr);
        }

        resultsTable.appendChild(thead);
        resultsTable.appendChild(tbody);

        container.appendChild(resultsTable);

        a = document.createElement("a");
        a.setAttribute("href", "../index.php");
        a.setAttribute("class", "btn");
        a.innerHTML = "Volver al Inicio";

        container.appendChild(a);

        //         <div class="table-container">
        //     <table>
        //         <thead>
        //             <tr>
        //                 <th>Posición</th>
        //                 <th>Nombre del Piloto</th>
        //                 <th>Puntos Conseguidos</th>
        //             </tr>
        //         </thead>
        //         <tbody>
        //             <tr>
        //                 <td>1</td>
        //                 <td>Piloto 1</td>
        //                 <td>25</td>
        //             </tr>
        //             <tr>
        //                 <td>2</td>
        //                 <td>Piloto 2</td>
        //                 <td>18</td>
        //             </tr>
        //             <tr>
        //                 <td>3</td>
        //                 <td>Piloto 3</td>
        //                 <td>15</td>
        //             </tr>
        //         </tbody>
        //     </table>
        // </div>
        // <a href="../index.php" class="btn">Volver al Inicio</a>
        // } catch (error) {
        //     console.error(error);
        // }
    });
});

function randPosition(numOfDrivers) {
    return Math.floor(Math.random() * numOfDrivers);
}
