console.log("--- Ejercicio 6 ---");

/*
 * Escribe el código para mostrar el valor del elemento que tiene como
 * atributo data-widget-name
 */

console.log(
    document.getElementsByTagName("div")[0].getAttributeNode("data-widget-name")
        .value
);

console.log(document.getElementsByTagName("div")[0].dataset.widgetName);
