console.log("--- Ejercicio 19 ---");

/*
 * Crear un script que haga lo siguiente:
 * - Al mover el ratón en cualquier punto de la ventana del navegador, se muestre la posición del
 *    puntero respecto del navegador y respecto de la pantalla.
 * - Al pulsar cualquier tecla, se debe mostrar el valor de la tecla pulsada y su código asociado.
 * - Añadir la siguiente característica al script: cuando se pulsa un botón del ratón, el color de
 *    fondo del cuadro de mensaje del ratón debe ser amarillo (#FFFFCC) y cuando se pulsa una tecla del
 *    teclado, el color de fondo del cuadro de mensaje del teclado debe ser azul (#CCE6FF). Al volver
 *    a mover el ratón, el color de fondo de los cuadros de mensaje vuelve a ser blanco.
 */

const MOUSEBOX = document.getElementById("raton");
const MOUSEDATA = document.getElementById("datosRaton");
const KEYBOARDBOX = document.getElementById("teclado");
const KEYBOARDDATA = document.getElementById("datosTeclado");

document.addEventListener("mousemove", (e) => {
    MOUSEDATA.innerHTML =
        "Navegador [" +
        e.pageX +
        ", " +
        e.pageY +
        "]<br>Ventana [" +
        e.clientX +
        ", " +
        e.clientY +
        "]<br>Pantalla [" +
        e.screenX +
        ", " +
        e.screenY +
        "]";
    MOUSEBOX.style.backgroundColor = "white";
    KEYBOARDBOX.style.backgroundColor = "white";
});

document.addEventListener(
    "mousedown",
    () => (MOUSEBOX.style.backgroundColor = "#FFFFCC")
);

document.addEventListener("keypress", (e) => {
    KEYBOARDDATA.innerHTML =
        "Carácter [" + e.key + "]<br>Código [" + e.code + "]";
    KEYBOARDBOX.style.backgroundColor = "#CCE6FF";
});
