console.log("--- Ejercicio 6 ---");

/*
 * Agrega el código para que funcionen los botones "arrow prev" y "arrow next". Para ello, basta con
 *  cambiar la propiedad margin-left del ul.
 */

let leftArrow = document.getElementsByClassName("prev")[0];
let rightArrow = document.getElementsByClassName("next")[0];

leftArrow.addEventListener("click", moverCarousel);
rightArrow.addEventListener("click", moverCarousel);

function moverCarousel() {
    let gallery = document.querySelectorAll("div.gallery ul")[0];
    let type = this.classList[1];
    let position = parseFloat(gallery.style.marginLeft) || 0;

    const MAX = -910;
    const MIN = 0;

    gallery.style.marginLeft =
        type == "prev"
            ? (position + 130 > MIN ? MAX : position + 130) + "px"
            : type == "next"
            ? (position - 130 < MAX ? MIN : position - 130) + "px"
            : "0px";
}
