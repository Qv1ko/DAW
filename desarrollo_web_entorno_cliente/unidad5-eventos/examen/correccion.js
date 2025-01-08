let libros = [
    {
        isbn: "1",
        titulo: "El último barco",
    },
    {
        isbn: "3",
        titulo: "Fracasología",
    },
    {
        isbn: "5",
        titulo: "Tiempos recios",
    },
    {
        isbn: "2",
        titulo: "Churchill",
    },
    {
        isbn: "4",
        titulo: "Sidi",
    },
];

document.addEventListener("DOMContentLoaded", () => {
    // Tabla
    const CONTENT = document.querySelector("#libros tbody");
    const COLUMNS = 3;
    let row, cell, btn;

    libros.forEach((libro) => {
        row = document.createElement("tr");
        for (let c = 0; c < COLUMNS; c++) {
            cell = document.createElement("td");
            switch (c) {
                case 0:
                    cell.textContent = libro.isbn;
                    break;

                case 1:
                    cell.textContent = libro.titulo;
                    break;

                case 2:
                    btn = document.createElement("button");
                    btn.textContent = "Prestar";
                    btn.setAttribute("disabled", true);
                    cell.append(btn);
                    break;

                default:
                    cell.textContent = "-";
                    break;
            }
            row.append(cell);
        }
        CONTENT.append(row);
    });

    // Evento de click
    document.addEventListener("click", seleccionar);
});

// Función de selección
let selectedElement;
seleccionar = (e) => {
    let row = e.target.closest("tr");
    let image = document.querySelector(".foto img");
    if (row) {
        if (selectedElement) {
            selectedElement.removeAttribute("class");
            selectedElement.cells[2].firstChild.setAttribute("disabled", true);
        }

        row.setAttribute("class", "seleccionada");
        row.cells[2].firstChild.removeAttribute("disabled");
        selectedElement = row;

        image.src = "./img/" + row.cells[0].textContent + ".jpg";
    }
};
