console.log("--- Ejercicio 10 B ---");

/*
 * Utiliza el fichero .json.
 * Crea una página web que, al cargarse, haga una petición AJAX al servidor, que le devolverá el
 *  archivo JSON.
 * Si el archivo .json no existe o no se ha podido cargar correctamente, se mostrará un texto
 *  indicándolo en la pantalla.
 * Si el archivo se carga correctamente, en la página se generará una tabla con los datos de las
 *  series, teniendo en cuenta las siguientes condiciones:
 * - El título, la cadena y el director: el título será negrita, y el director en cursiva.
 * - El año aparecerá en color rojo si la serie es anterior al año 2000, en amarillo si está entre
 *    el 2001 y el 2010 y en verde si es posterior al 2011.
 * - En la celda terminada habrá un icono que indique si la serie se ha terminado o no su emisión.
 *    Para ello, utiliza una fuente de iconos como por ejemplo Font Awesome o una imagen.
 */

document.addEventListener("DOMContentLoaded", () => {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", new URL("./data/ejercicio10.json", window.location.href));
    xhr.responseType = "json";
    xhr.addEventListener("load", () => {
        const body = document.body;

        if (!(xhr.status != 200)) {
            for (const [element, data] of Object.entries(xhr.response)) {
                let title = document.createElement("h2");
                let table = document.createElement("table");

                title.textContent = element;
                body.append(title);

                if (data) {
                    for (const serie of data) {
                        let tr = document.createElement("tr");

                        for (const [key, value] of Object.entries(serie)) {
                            let td = document.createElement("td");

                            if (key !== "terminada") {
                                td.textContent = value;
                            } else {
                                let icon = document.createElementNS(
                                    "http://www.w3.org/2000/svg",
                                    "svg"
                                );
                                let iconPath = document.createElementNS(
                                    "http://www.w3.org/2000/svg",
                                    "path"
                                );

                                icon.setAttribute(
                                    "xmlns",
                                    "http://www.w3.org/2000/svg"
                                );
                                icon.setAttribute(
                                    "viewBox",
                                    value.toLowerCase() === "si"
                                        ? "0 0 448 512"
                                        : "0 0 576 512"
                                );
                                iconPath.setAttribute(
                                    "d",
                                    value.toLowerCase() === "si"
                                        ? "M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"
                                        : "M80.3 44C69.8 69.9 64 98.2 64 128s5.8 58.1 16.3 84c6.6 16.4-1.3 35-17.7 41.7s-35-1.3-41.7-17.7C7.4 202.6 0 166.1 0 128S7.4 53.4 20.9 20C27.6 3.6 46.2-4.3 62.6 2.3S86.9 27.6 80.3 44zM555.1 20C568.6 53.4 576 89.9 576 128s-7.4 74.6-20.9 108c-6.6 16.4-25.3 24.3-41.7 17.7S489.1 228.4 495.7 212c10.5-25.9 16.3-54.2 16.3-84s-5.8-58.1-16.3-84C489.1 27.6 497 9 513.4 2.3s35 1.3 41.7 17.7zM352 128c0 23.7-12.9 44.4-32 55.4L320 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-296.6c-19.1-11.1-32-31.7-32-55.4c0-35.3 28.7-64 64-64s64 28.7 64 64zM170.6 76.8C163.8 92.4 160 109.7 160 128s3.8 35.6 10.6 51.2c7.1 16.2-.3 35.1-16.5 42.1s-35.1-.3-42.1-16.5c-10.3-23.6-16-49.6-16-76.8s5.7-53.2 16-76.8c7.1-16.2 25.9-23.6 42.1-16.5s23.6 25.9 16.5 42.1zM464 51.2c10.3 23.6 16 49.6 16 76.8s-5.7 53.2-16 76.8c-7.1 16.2-25.9 23.6-42.1 16.5s-23.6-25.9-16.5-42.1c6.8-15.6 10.6-32.9 10.6-51.2s-3.8-35.6-10.6-51.2c-7.1-16.2 .3-35.1 16.5-42.1s35.1 .3 42.1 16.5z"
                                );

                                icon.append(iconPath);
                                td.append(icon);
                            }

                            switch (key) {
                                case "titulo":
                                    td.style.fontWeight = "bold";
                                    break;

                                case "director":
                                    td.style.fontStyle = "italic";
                                    break;

                                case "anio":
                                    let year = parseInt(value);
                                    td.setAttribute(
                                        "class",
                                        year < 2000
                                            ? "red"
                                            : year > 2011
                                            ? "green"
                                            : "yellow"
                                    );
                                    break;

                                case "titulo":
                                    break;

                                default:
                                    break;
                            }

                            tr.append(td);
                        }

                        table.append(tr);
                    }
                    body.append(table);
                }
            }
        } else {
            let error = document.createElement("p");
            error.textContent =
                "❗El archivo JSON no existe o no se ha podido cargar correctamente.";
            body.append(error);
        }
    });
    xhr.send();
});

// function loadData(xhr) {}
