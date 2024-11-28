console.log("--- Ejercicio 13 B ---");

/*
 * Transformar el modelo de eventos en línea o el modelo de eventos
 *  tradicional, al modelo de eventos del W3C (addEventListener).
 */

img = document.body.querySelector("img");

img.addEventListener(
    "ondblclick",
    (e) => (e.target.src = "./img/lamp_off.jpg")
);

img.addEventListener("click", (e) => (e.target.src = "./img/lamp_on.jpg"));
