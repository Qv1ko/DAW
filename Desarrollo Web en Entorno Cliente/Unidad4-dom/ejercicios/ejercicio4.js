console.log("--- Ejercicio 4 ---");

/*
 * A partir de la página html del ejercicio, se pide escribir las
 *  expresiones para acceder a:
 */

// La tabla con id="age-table".
console.log(document.getElementById("age-table"));

// Todos los elementos label dentro de la tabla (debería haber 3).
console.log(document.getElementById("age-table").getElementsByTagName("label"));

// El primer td en la tabla (con la palabra "Edad").
console.log(document.getElementById("age-table").getElementsByTagName("td")[0]);

// El form con name="search".
console.log(document.getElementsByName("search")[0]);

// El primer input en ese formulario.
console.log(
    document.getElementsByName("search")[0].getElementsByTagName("input")[0]
);

// El último input en ese formulario.
console.log(
    document.getElementsByName("search")[0].getElementsByTagName("input")[
        document.getElementsByName("search")[0].getElementsByTagName("input")
            .length - 1
    ]
);
