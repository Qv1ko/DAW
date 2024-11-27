console.log("--- Ejercicio 13 A ---");

/*
 * Transformar el modelo de eventos en línea al modelo de eventos tradicional.
 */

let img = document.body.querySelector("img");

img.ondblclick = (e) => (e.target.src = "./img/ejercicio13-lamp_off.jpg");

img.onclick = (e) => (e.target.src = "./img/ejercicio13-lamp_on.jpg");
