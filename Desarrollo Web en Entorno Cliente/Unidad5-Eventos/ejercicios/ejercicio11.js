console.log("--- Ejercicio 11 ---");

/*
 * Crea una galería de imágenes donde la imagen principal cambia al
 *  hacer clic en una miniatura.
 * Utiliza la delegación de eventos.
 */

const UL = document.getElementById("thumbs");
const IMG = document.getElementById("largeImg");

UL.addEventListener("click", (event) => {
    let link = event.target.closest("a");
    if (link) {
        IMG.setAttribute("src", link.getAttribute("href"));
        event.preventDefault();
    }
});
