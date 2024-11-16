console.log("--- Ejercicio 1 ---");

/*
 * Indicar modos de acceder a los elementos:
 */

// ¿El nodo <div> del DOM?
console.log(document.body.firstElementChild);
// console.log(document.body.children[0]);
// console.log(document.body.querySelector("div"));

// ¿El nodo <ul> del DOM?
console.log(document.body.children[1]);
// console.log(document.body.getElementsByTagName("ul")[0]);

// El segundo <li> (con Pete)?
console.log(document.body.children[1].getElementsByTagName("li")[1]);
// console.log(document.body.children[1].children[1]);
// console.log(document.getElementsByTagName("li")[1]);
