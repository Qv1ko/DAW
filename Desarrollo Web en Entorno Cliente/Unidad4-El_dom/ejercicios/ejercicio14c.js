console.log("--- Ejercicio 14 C ---");

/*
 * Completa el código, de modo que se muestren en pantalla, en
 * una tabla, los datos del array “equiposInformaticos”.
 */

const equiposInformaticos = [
    {
        tipo: "impresora",
        modelo: "HP LaserJet Pro M404n",
        fechaCompra: new Date(2021, 4, 12),
        fechaFinGarantia: new Date(2023, 4, 12),
        ubicacion: "Oficina A",
    },
    {
        tipo: "ordenador",
        modelo: "Dell Inspiron 5000",
        fechaCompra: new Date(2020, 2, 21),
        fechaFinGarantia: new Date(2023, 2, 21),
        ubicacion: "Oficina B",
    },
    {
        tipo: "monitor",
        modelo: "Samsung Odyssey G7",
        fechaCompra: new Date(2022, 7, 15),
        fechaFinGarantia: new Date(2024, 7, 15),
        ubicacion: "Sala de reuniones",
    },
    {
        tipo: "impresora",
        modelo: "Canon PIXMA 5200",
        fechaCompra: new Date(2019, 10, 30),
        fechaFinGarantia: new Date(2021, 10, 30),
        ubicacion: "Oficina C",
    },
    {
        tipo: "ordenador",
        modelo: 'Apple iMac 27"',
        fechaCompra: new Date(2021, 5, 10),
        fechaFinGarantia: new Date(2024, 5, 10),
        ubicacion: "Oficina A",
    },
    {
        tipo: "monitor",
        modelo: "LG UltraWide 34WN80C-B",
        fechaCompra: new Date(2020, 8, 5),
        fechaFinGarantia: new Date(2023, 8, 5),
        ubicacion: "Oficina D",
    },
    {
        tipo: "impresora",
        modelo: "Brother HL-L2360DW",
        fechaCompra: new Date(2021, 1, 22),
        fechaFinGarantia: new Date(2023, 1, 22),
        ubicacion: "Oficina B",
    },
    {
        tipo: "ordenador",
        modelo: "Lenovo ThinkPad X1 Carbon",
        fechaCompra: new Date(2023, 0, 10),
        fechaFinGarantia: new Date(2026, 0, 10),
        ubicacion: "Oficina E",
    },
    {
        tipo: "monitor",
        modelo: "Acer Predator XB271HU",
        fechaCompra: new Date(2021, 6, 15),
        fechaFinGarantia: new Date(2024, 6, 15),
        ubicacion: "Sala de control",
    },
    {
        tipo: "impresora",
        modelo: "Epson EcoTank ET-2720",
        fechaCompra: new Date(2022, 1, 5),
        fechaFinGarantia: new Date(2025, 1, 5),
        ubicacion: "Oficina C",
    },
    {
        tipo: "ordenador",
        modelo: "HP Pavilion 15",
        fechaCompra: new Date(2021, 10, 1),
        fechaFinGarantia: new Date(2024, 10, 1),
        ubicacion: "Oficina F",
    },
    {
        tipo: "monitor",
        modelo: "Dell UltraSharp U2720Q",
        fechaCompra: new Date(2022, 2, 18),
        fechaFinGarantia: new Date(2025, 2, 18),
        ubicacion: "Oficina G",
    },
    {
        tipo: "impresora",
        modelo: "Xerox Phaser 3260",
        fechaCompra: new Date(2018, 6, 9),
        fechaFinGarantia: new Date(2020, 6, 9),
        ubicacion: "Oficina E",
    },
    {
        tipo: "ordenador",
        modelo: "Asus ROG Strix",
        fechaCompra: new Date(2023, 4, 10),
        fechaFinGarantia: new Date(2026, 4, 10),
        ubicacion: "Sala de juegos",
    },
    {
        tipo: "monitor",
        modelo: "BenQ ZOWIE XL2411P",
        fechaCompra: new Date(2021, 0, 25),
        fechaFinGarantia: new Date(2024, 0, 25),
        ubicacion: "Oficina H",
    },
    {
        tipo: "impresora",
        modelo: "Ricoh SP C261DNw",
        fechaCompra: new Date(2020, 5, 14),
        fechaFinGarantia: new Date(2023, 5, 14),
        ubicacion: "Oficina G",
    },
    {
        tipo: "ordenador",
        modelo: "Microsoft Surface Laptop 4",
        fechaCompra: new Date(2022, 9, 5),
        fechaFinGarantia: new Date(2025, 9, 5),
        ubicacion: "Oficina D",
    },
    {
        tipo: "monitor",
        modelo: "Philips 276E8VJSB",
        fechaCompra: new Date(2021, 8, 18),
        fechaFinGarantia: new Date(2024, 8, 18),
        ubicacion: "Oficina I",
    },
    {
        tipo: "impresora",
        modelo: "Lexmark C3326dw",
        fechaCompra: new Date(2023, 1, 12),
        fechaFinGarantia: new Date(2026, 1, 12),
        ubicacion: "Oficina F",
    },
    {
        tipo: "ordenador",
        modelo: "Acer Aspire 5",
        fechaCompra: new Date(2021, 3, 22),
        fechaFinGarantia: new Date(2024, 3, 22),
        ubicacion: "Oficina J",
    },
];

objToTable(equiposInformaticos);

function objToTable(objArray) {
    let table = document.createElement("table");

    for (let i = 0; i < objArray.length; i++) {
        row = document.createElement("tr");

        if (i == 0) {
            headerRow = document.createElement("tr");
            for (let atributo of Object.keys(objArray[i])) {
                header = document.createElement("th");
                header.textContent = atributo.toUpperCase();
                headerRow.append(header);
            }
            table.append(headerRow);
        }

        for (let valor of Object.values(objArray[i])) {
            column = document.createElement("td");
            column.textContent = valor;
            row.append(column);
        }

        table.append(row);
    }

    document.body.append(table);
}
