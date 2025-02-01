console.log("--- Ejercicio 15 A ---");

/*
 * Cuestiones:
 */

const xhr = new XMLHttpRequest();

/*
 * Pon un ejemplo de un caso en el que sea necesario utilizar el comando xhr.setRequestHeader.
 */
// Cuando se envían datos que requieren encabezados específicos como los datos JSON.
xhr.open("POST", "ejemplo.php");
xhr.setRequestHeader("Content-Type", "application/json");
xhr.send(JSON.stringify({ nombre: "Juan", edad: 30 }));

/*
 * ¿Qué ventajas tiene utilizar el objeto URLSearchParams?
 */
// Un objeto URLSearchParams permite manejar parámetros de una URL de forma sencilla.
const params = new URLSearchParams();
params.append("usuario", "juan");
params.append("id", "123");
console.log(params.toString()); // "usuario=juan&id=123"

/*
 * Con XMLHttpRequest, si hacemos una llamada “GET” con parámetros, ¿cómo se envían los parámetros?
 */
// Los parámetros se envían en la URL, después del ? y separados por &.
xhr.open("GET", "https://ejemplo.com/api?usuario=juan&id=123");
xhr.send();

/*
 * ¿Y si lo hacemos con fetch()?
 */
// Los parámetros también se envían en la URL.
fetch("https://ejemplo.com/api?usuario=juan&id=123")
    .then((response) => response.json())
    .then((data) => console.log(data));

/*
 * Con XMLHttpRequest, si recibimos un JSON del servidor, ¿qué comandos tenemos que utilizar?
 */
// Hay que utilizar el método JSON.parse() sobre la respuesta, para convertirla en un objeto.

/*
 * Reescribe la siguiente llamada al servidor utilizando fetch.
 */

xhr.open("POST", url);

let formData = new FormData();
formData.append(" nombre ", "Juan");
formData.append(" apellido ", "Sierra");

xhr.open("POST", "usuario.php");
xhr.send(formData);

// ---

fetch(new URL("usuario.php", window.location.href), {
    method: "POST",
    body: {
        nombre: "Juan",
        apellido: "Sierra",
    },
    headers: {
        "Content-Type": "application/json",
    },
});

/*
 * Escribe una función llamada leer que haga una llamada asíncrona al archivo datos.php, pasando
 *  como parámetro el nombre (del formulario) y utilizando GET.
 * El archivo datos.php espera un parámetro llamado nombre.
 * La respuesta del archivo datos.php será un JSON que se pasará a otra función llamada tratarDatos.
 *  Utiliza fetch. No es necesario control de errores.
 */

async function leer(formName) {
    try {
        response = await fetch(new URL("datos.php", window.location.href), {
            method: "GET",
            body: {
                nombre: formName,
            },
            headers: {
                "Content-Type": "application/json",
            },
        });

        if (!response.ok) {
            throw new Error("❗ Error al obtener los datos.");
        }

        data = await response.json();
        tratarDatos(data);
    } catch (err) {
        console.error(err);
    }
}
