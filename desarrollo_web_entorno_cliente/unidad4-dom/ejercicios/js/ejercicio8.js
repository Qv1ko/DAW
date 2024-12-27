console.log("--- Ejercicio 8 ---");

/*
 * Indica la salida que nos darían por consola las siguientes
 *  expresiones, después de haber ejecutado las siguientes sentencias:
 */

let x = document.getElementById("id1");
let z = document.querySelectorAll("#id2");
let v = document.querySelectorAll("#id4");
let t = document.querySelectorAll("div.c2");

// a) x.outerHTML;
console.log(x.outerHTML); // Devuelve el elemento HTML con id "id1"

// b) z[0].innerHTML;
console.log(z[0].innerHTML); // Devuelve el contenido de la etiqueta con id "id2"

// c) v;
console.log(v); // Devuelve una lista de elementos (nodeList) vacia, ya que no hay ninguna etiqueta con id "id4"

// d) t[0].innerHTML;
console.log(t[0].innerHTML); // Devuelve el contenido de la equiqueta "<div>" perteneciente a la clase "c2"

// e) x.innerHTML;
console.log(x.innerHTML); // Devuelve el contenido de la etiqueta con id "id1";
