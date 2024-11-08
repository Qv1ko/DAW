console.log("-- Clase 3 --");

let div = document.createElement("div");
let p = document.createElement("p");

p.textContent = "clase3";

div.append(p);

document.body.append(div);

p = document.createElement("p");

p.textContent = "parrafo 2 de la clase";
p.style.backgroundColor = "blue";
p.style.color = "white";

document.body.prepend(p);
document.body.append(p);

for (let i = 0; i < 5; i++) {
    let element = document.createElement("p");
    element.textContent = "I = " + i;
    element.style.color = "blue";
    document.body.append(element);
}

let tabl = document.body.querySelectorAll("table")[0];
let par = document.createElement("p");
par.textContent = "hola";
par.style.color = "orange";
tabl.before(par);

let divElement = document.createElement("div");
div.textContent = "div clase 3";

let replaceElement = document.getElementById("c3p");
replaceElement.replaceWith(divElement);

document.querySelectorAll("h2")[0].remove();

let elementoClonado = document.getElementsByTagName("div")[0].cloneNode(true);
document.body.append(elementoClonado);
