console.log("--- Ejercicio 6 ---");

/*
 * Agrega el código para que funcionen los botones "arrow prev" y "arrow
 *  next". Para ello, basta con cambiar la propiedad margin-left del ul.
 */

let leftArrow = document.getElementsByClassName("prev")[0];
let rightArrow = document.getElementsByClassName("next")[0];

leftArrow.addEventListener("click", moverCarousel);
rightArrow.addEventListener("click", moverCarousel);

function moverCarousel() {
    let gallery = document.querySelectorAll("div.gallery ul")[0];
    let type = this.classList[1];
    let position = parseFloat(gallery.style.marginLeft) || 0;
    const MAX = -1170;
    const MIN = 260;
    if (type == "prev") {
        gallery.style.marginLeft =
            (position + 130 > MIN ? position : position + 130) + "px";
    } else if (type == "next") {
        gallery.style.marginLeft =
            (position - 130 < MAX ? position : position - 130) + "px";
    }
}
