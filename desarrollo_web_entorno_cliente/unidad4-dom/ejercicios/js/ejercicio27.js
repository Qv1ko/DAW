console.log("--- Ejercicio 27 ---");

/*
 * Utilizando JavaScript, calcula las coordenadas de las esquinas de
 *  la ventana marcadas con triángulos.
 */

let field = document.getElementById("field");

console.log("Bandera 1: " + field.offsetLeft + ":" + field.offsetTop);
console.log(
    "Bandera 2: " +
        (field.offsetLeft + field.offsetWidth) +
        ":" +
        (field.offsetTop + field.offsetHeight)
);
console.log(
    "Bandera 3: " +
        (field.offsetLeft + field.clientLeft) +
        ":" +
        (field.offsetTop + field.clientTop)
);
console.log(
    "Bandera 4: " +
        (field.offsetLeft + field.clientLeft + field.clientWidth) +
        ":" +
        (field.offsetTop + field.clientTop + field.clientHeight)
);
