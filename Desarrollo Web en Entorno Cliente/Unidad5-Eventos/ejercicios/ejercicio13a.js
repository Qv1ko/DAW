console.log("--- Ejercicio 13 A ---");

/*
 * Transformar el modelo de eventos en línea al modelo de eventos tradicional.
 */

let img = document.body.querySelector("img");

img.ondblclick = (e) => (e.target.src = "./img/lamp_off.jpg");

img.onclick = (e) => (e.target.src = "./img/lamp_on.jpg");
