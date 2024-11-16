console.log("--- Ejercicio 23 ---");

/*
 * Completa la página web, para mostrar en el div con id="info", la
 *  siguiente información de la web:
 */

info = document.getElementById("info");
list = document.createElement("ul");

// El número de párrafos de la página.
let item = document.createElement("li");
item.textContent =
    "Número de párrafos de la página: " +
    document.body.getElementsByTagName("p").length;
list.append(item);

// El texto del segundo párrafo.
item = document.createElement("li");
item.textContent =
    "Texto del segundo párrafo: " +
    document.body.getElementsByTagName("p")[1].textContent;
list.append(item);

// El número de enlaces de la página.
item = document.createElement("li");
item.textContent =
    "Número de enlaces de la página: " +
    document.body.getElementsByTagName("a").length;
list.append(item);

// La dirección del primer enlace.
item = document.createElement("li");
item.textContent =
    "Dirección del primer enlace: " +
    document.body.getElementsByTagName("a")[0].getAttribute("href");
list.append(item);

// La dirección del penúltimo enlace.
item = document.createElement("li");
item.textContent =
    "Dirección del penúltimo enlace: " +
    document.body.getElementsByTagName("a")[
        document.body.getElementsByTagName("a").length - 2
    ].href;
list.append(item);

// El número de enlaces que apuntan a http://prueba.
let linkCounter = 0;
item = document.createElement("li");
for (let element of document.body.getElementsByTagName("a")) {
    if (element.getAttribute("href") == "http://prueba") {
        linkCounter++;
    }
}
item.textContent = "Número de enlaces a 'http://prueba': " + linkCounter;
list.append(item);

// El número de enlaces del primer párrafo.
item = document.createElement("li");
item.textContent =
    "Número de enlaces del primer párrafo: " +
    document.body.getElementsByTagName("p")[0].getElementsByTagName("a").length;
list.append(item);

info.append(list);
