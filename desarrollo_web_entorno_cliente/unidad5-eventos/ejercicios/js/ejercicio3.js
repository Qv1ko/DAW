console.log("--- Ejercicio 3 ---");

/*
 * Agrega el código para que, al hacer clic en algún lugar del
 *  campo, el balón se mueva a ese lugar.
 * - El balón debe quedar centrado donde se ha hecho click, si es posible.
 * - El balón no debería salir del campo.
 * - Si la página se desplaza, el balón debería seguir correctamente colocado.
 */

let field = document.getElementById("field");
field.addEventListener("click", moverAlCursor);

function moverAlCursor(cursor) {
    let ball = document.getElementById("ball");
    const XMIN = field.offsetLeft + field.clientLeft;
    const XMAX = field.offsetLeft + field.clientLeft + field.clientWidth;
    const YMIN = field.offsetTop + field.clientTop;
    const YMAX = field.offsetTop + field.clientTop + field.clientHeight;
    ball.style.left =
        (cursor.clientX < XMIN
            ? XMIN
            : cursor.clientX > XMAX
            ? XMAX
            : cursor.clientX) -
        ball.width / 2 +
        "px";
    ball.style.top =
        (cursor.clientY < YMIN
            ? YMIN
            : cursor.clientY > YMAX
            ? YMAX
            : cursor.clientY) -
        ball.height / 2 +
        "px";
}
