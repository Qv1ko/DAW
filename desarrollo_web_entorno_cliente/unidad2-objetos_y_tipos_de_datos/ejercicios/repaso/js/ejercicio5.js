console.log("--- Ejercicio 5 ---");

/*
 * Explica el motivo del mensaje de error en la expresión "pan["sinSemillas"]["deLino"];".
 * Explica el motivo del undefined en el console.log.
 */

let pan = {
    blanco: 6,
    deAjo: 5,
    deSemillas: {
        deAvena: 3,
        deLino: 6,
    },
};

delete pan.deAjo;

pan.deQueso = 3;

//pan["sinSemillas"]["deLino"]; // Da error porque la propiedad "sinSemillas" no existe

//console.log(pan.deAjo); // Muestra undefined porque la propiedad "deAjo" fue eliminado anteriormente
