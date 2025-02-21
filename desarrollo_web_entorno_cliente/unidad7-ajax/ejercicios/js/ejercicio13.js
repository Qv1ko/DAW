console.log("--- Ejercicio 13 ---");

/*
 * Vamos a crear una lista de tareas.
 * Dividiremos la pantalla en tres zonas:
 * - Tareas pendientes
 * - Tareas realizadas
 * - Tareas eliminadas
 * Las tareas se leerán de una base de datos que tendrá almacenada la tarea y su estado: pendientes,
 *  realizadas o eliminadas.
 * En cada una de las zonas de la pantalla, habrá una tabla con las tareas que están en ese estado.
 *  En la primera zona, estará la caja de texto para crear una nueva tarea, junto con los botones
 *  Añadir y Eliminar que creamos en la actividad correspondiente de la unidad anterior.
 * En la tabla de Tareas pendientes, junto a las tareas, estará botón Eliminar tarea que ya teníamos,
 *  y un nuevo botón Finalizar,  para indicar que se ha realizado la tarea. Ambos botones se crearán
 *  a partir de una imagen creada con una fuente. Al pasar sobre el botón, aparecerá un tooltip (title)
 *  describiendo lo que hace el botón.
 * En la tabla de Tareas realizadas, cada tarea tendrá un botón Eliminar tarea.
 * Además, en el lado del servidor, tendremos un array con sugerencias de tareas. Cuando el usuario
 *  empiece a escribir una nueva tarea, se mostrarán las sugerencias en un <datalist>, para que pueda
 *  seleccionarlas. Las sugerencias que aparecerán serán las que contengan el texto que está
 *  escribiendo el usuario.
 * Algunas sugerencias pueden ser:
 * - Felicitar a…
 * - Médico…
 * - Comprar…
 * - Leer…
 * - Limpiar…
 * Se utilizarán llamadas asíncronas para:
 * - Cargar las tareas de la base de datos cuando se cargue la página.
 * - Presentar las sugerencias.
 * - Modificar la base de datos cada vez que el usuario elimine una tarea o la marque como finalizada.
 */

document.addEventListener("DOMContentLoaded", () => {
    loadSuggestions();
    loadTasks();
    document.getElementById("agregarTarea").addEventListener("click", addTask);
    document.getElementById("resetTarea").addEventListener("click", resetInput);
});

async function loadSuggestions() {
    try {
        const response = await fetch("./php/ejercicio13-suggestions.php");

        if (!response.ok) {
            throw new Error("Error al cargar las sugerencias");
        }

        const data = await response.json();

        data.forEach((option) => {
            const newOption = document.createElement("option");
            newOption.setAttribute("value", option);

            document.getElementById("sugerencias").appendChild(newOption);
        });
    } catch (err) {
        console.error(err);
    }
}

async function loadTasks() {
    try {
        const response = await fetch("./php/ejercicio13-read.php");

        if (!response.ok) {
            throw new Error("Error al cargar los datos");
        }

        const data = await response.json();

        let earrings = [];
        let realized = [];
        let deleted = [];

        data.forEach((task) => {
            let tr = document.createElement("tr");
            tr.setAttribute("id", task.id);
            let td = document.createElement("td");

            let realizedBtn = document.createElement("button");
            realizedBtn.textContent = "✅";
            realizedBtn.setAttribute("title", "Finalizar tarea");
            realizedBtn.addEventListener("click", completeTask);

            let delBtn = document.createElement("button");
            delBtn.textContent = "🗑️";
            delBtn.setAttribute("title", "Eliminar tarea");
            delBtn.addEventListener("click", deleteTask);

            let cells = [];

            td.textContent = task.descripcion;
            cells.push(td);

            switch (task.estado) {
                case "pendiente":
                    cells.push(realizedBtn);
                    cells.push(delBtn);
                    cells.map((cell) => tr.appendChild(cell));
                    earrings.push(tr);
                    break;

                case "realizada":
                    cells.push(delBtn);
                    cells.map((cell) => tr.appendChild(cell));
                    realized.push(tr);
                    break;

                case "eliminada":
                    cells.map((cell) => tr.appendChild(cell));
                    deleted.push(tr);
                    break;
            }
        });

        const earringsList = document.getElementById("listaPendientes");
        const realizedList = document.getElementById("listaRealizadas");
        const deletedList = document.getElementById("listaEliminadas");

        earringsList.innerHTML = "";
        realizedList.innerHTML = "";
        deletedList.innerHTML = "";

        if (earrings.length > 0) {
            earrings.map((row) => {
                earringsList.appendChild(row);
            });
        }

        if (realized.length > 0) {
            realized.map((row) => {
                realizedList.appendChild(row);
            });
        }

        if (deleted.length > 0) {
            deleted.map((row) => {
                deletedList.appendChild(row);
            });
        }
    } catch (err) {
        console.error(err);
    }
}

async function addTask(e) {
    e.preventDefault();
    try {
        const response = await fetch("./php/ejercicio13-add.php", {
            method: "POST",
            body: new URLSearchParams({
                desc: document.getElementById("nuevaTarea").value,
            }),
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        });

        if (!response.ok) {
            throw new Error("Error al crear la tarea");
        }
    } catch (err) {
        console.error(err);
    }
    loadTasks();
}

function resetInput(e) {
    e.preventDefault();
    document.getElementById("nuevaTarea").value = "";
}

async function completeTask(e) {
    try {
        const response = await fetch("./php/ejercicio13-complete.php", {
            method: "POST",
            body: new URLSearchParams({
                id: e.target.parentElement.id,
            }),
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        });

        if (!response.ok) {
            throw new Error("Error al actualizar los datos");
        }
    } catch (err) {
        console.error(err);
    }
    loadTasks();
}

async function deleteTask(e) {
    try {
        const response = await fetch("./php/ejercicio13-delete.php", {
            method: "POST",
            body: new URLSearchParams({
                id: e.target.parentElement.id,
            }),
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        });

        if (!response.ok) {
            throw new Error("Error al actualizar los datos");
        }
    } catch (err) {
        console.error(err);
    }
    loadTasks();
}
