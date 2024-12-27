console.log("--- Ejercicio 21 B ---");

/*
 * Crea una nueva versión del ejercicio anterior, pero utilizando el modelo de eventos tradiciona.
 */

document.addEventListener("DOMContentLoaded", () => {
    const FNTITLE = document.getElementById("w3c_fnombre");
    const FATITLE = document.getElementById("w3c_fanonima");
    const FFTITLE = document.getElementById("w3c_fflecha");

    FNTITLE.onmouseenter = mouseEnter;
    FNTITLE.onmouseleave = clear;

    function clear(e) {
        e.target.style.backgroundColor = "";
    }

    FATITLE.onmouseenter = mouseEnter;
    FATITLE.onmouseleave = function (e) {
        e.target.style.backgroundColor = "";
    };

    FFTITLE.onmouseenter = mouseEnter;
    FFTITLE.onmouseleave = (e) => (e.target.style.backgroundColor = "");

    function mouseEnter(e) {
        e.target.style.backgroundColor = "#0000FF";
        e.target.onmouseenter = "";
    }
});
