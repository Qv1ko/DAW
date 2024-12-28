console.log("--- Ejercicio 14 ---");

/*
 * Añadir a nuestra calculadora dos botones más x3 y 1/x.
 * También se añadirá un campo informativo mediante la etiqueta <h3> con contenido inicial "Información
 *  sobre el número". El contenido del campo se debe actualizar cada vez que se hace un cálculo en
 *  la calculadora. Su contenido debe ser "Información: el resultado de la operación x2 | x3 | 1/x
 *  es número."
 */

document.addEventListener("DOMContentLoaded", () => {
    const B1 = document.getElementById("b1");

    const B2 = document.createElement("button");
    B2.setAttribute("id", "b2");
    B2.innerHTML = "x<sup>3</sup>";
    B2.style.margin = "0 8px";

    B1.insertAdjacentElement("afterend", B2);

    const B3 = document.createElement("button");
    B3.setAttribute("id", "b3");
    B3.textContent = "1/x";
    B3.style.paddingTop = "4px";

    B2.insertAdjacentElement("afterend", B3);

    const INFO = document.createElement("h3");
    INFO.setAttribute("id", "info");
    INFO.textContent = "Información sobre el número";
    B3.insertAdjacentElement("afterend", INFO);
});

document.addEventListener("click", (e) => {
    if (e.target.matches("#n1")) {
        vaciar();
    } else if (e.target.matches("#b1")) {
        cuadrado();
    } else if (e.target.matches("#b2")) {
        cubo();
    } else if (e.target.matches("#b3")) {
        division();
    }
});

vaciar = () => (document.getElementById("n1").value = "");

function cuadrado() {
    let num = document.getElementById("n1");
    let info = document.getElementById("info");
    let oldNum = num.value;
    num.value = Math.pow(num.value, 2);
    info.textContent =
        "Información: El resultado de la operación " +
        oldNum +
        "^2 es " +
        num.value;
}

function cubo() {
    let num = document.getElementById("n1");
    let info = document.getElementById("info");
    let oldNum = num.value;
    num.value = Math.pow(num.value, 3);
    info.textContent =
        "Información: El resultado de la operación " +
        oldNum +
        "^3 es " +
        num.value;
}

function division() {
    let num = document.getElementById("n1");
    let info = document.getElementById("info");
    let oldNum = num.value;
    num.value = 1 / num.value;
    info.textContent =
        "Información: El resultado de la operación 1/" +
        oldNum +
        " es " +
        num.value;
}
