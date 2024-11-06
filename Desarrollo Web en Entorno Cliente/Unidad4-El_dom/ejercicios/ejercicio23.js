console.log("--- Ejercicio 23 ---");

/*
 * Completa la página web, para mostrar en el div con id="info", la siguiente
 * información de la web:
 */

// El número de párrafos de la página.
document.body.innerHTML +=
    "<h4>Número de párrafos de la página:</h4><p>" +
    document.body.getElementsByTagName("p").length +
    "</p>";

// El texto del segundo párrafo.
document.body.innerHTML +=
    "<h4>Texto del segundo párrafo:</h4><p>" +
    document.body.getElementsByTagName("p")[1].textContent +
    "</p>";

// El número de enlaces de la página.
document.body.innerHTML +=
    "<h4>Número de enlaces de la página:</h4><p>" +
    document.body.getElementsByTagName("a").length +
    "</p>";

// La dirección del primer enlace.
document.body.innerHTML +=
    "<h4>Dirección del primer enlace:</h4><p>" +
    document.body.getElementsByTagName("a")[0].getAttribute("href") +
    "</p>";

// La dirección del penúltimo enlace.
document.body.innerHTML +=
    "<h4>Dirección del penúltimo enlace:</h4><p>" +
    document.body
        .getElementsByTagName("a")
        [document.body.getElementsByTagName("a").length - 2].getAttribute(
            "href"
        ) +
    "</p>";

// El número de enlaces que apuntan a http://prueba.
let linkCounter = 0;
for (let element of document.body.getElementsByTagName("a")) {
    if (element.getAttribute("href") == "http://prueba") {
        linkCounter++;
    }
}
document.body.innerHTML +=
    "<h4>Número de enlaces a 'http://prueba':</h4><p>" + linkCounter + "</p>";

// El número de enlaces del primer párrafo.
document.body.innerHTML +=
    "<h4>Número de enlaces del primer párrafo:</h4><p>" +
    document.body.getElementsByTagName("p")[0].getElementsByTagName("a")
        .length +
    "</p>";
