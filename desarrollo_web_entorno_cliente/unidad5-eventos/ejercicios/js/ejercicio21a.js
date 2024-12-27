console.log("--- Ejercicio 21 A ---");

/*
 * Cuando el ratón esté sobre cada uno de los h3, tiene que cambiar el color de fondo,y anular la
 *  asignación del evento, es decir, si se vuelve a pasar sobre el h3, ya no cambiará su color.
 * Al dejar de estar sobre ellos, tiene que volver al color de fondo inicial (asignándole "").
 * Condiciones:
 * - En todos los casos, utilizar el modelo W3C.
 * - En el caso del primer h3, se tiene que hacer con una función con nombre.
 * - En el caso del segundo, con una función anónima.
 * - En el caso del tercero, con una función flecha.
 * - No se puede modificar el HTML.
 */

document.addEventListener("DOMContentLoaded", () => {
    const FNTITLE = document.getElementById("w3c_fnombre");
    const FATITLE = document.getElementById("w3c_fanonima");
    const FFTITLE = document.getElementById("w3c_fflecha");

    FNTITLE.addEventListener("mouseenter", mouseEnter);
    FNTITLE.addEventListener("mouseleave", clear);

    function clear(e) {
        e.target.style.backgroundColor = "";
    }

    FATITLE.addEventListener("mouseenter", mouseEnter);
    FATITLE.addEventListener("mouseleave", function (e) {
        e.target.style.backgroundColor = "";
    });

    FFTITLE.addEventListener("mouseenter", mouseEnter);
    FFTITLE.addEventListener(
        "mouseleave",
        (e) => (e.target.style.backgroundColor = "")
    );

    function mouseEnter(e) {
        e.target.style.backgroundColor = "#0000FF";
        e.target.removeEventListener("mouseenter", mouseEnter);
    }
});
