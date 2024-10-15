console.log("--- Ejercicio 5 ---");

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

//pan["sinSemillas"]["deLino"]; // Da error porque intenta acceder al valor del objeto como si fuera un array

//console.log(pan.deAjo); // Muestra undefined porque el atributo "deAjo" fue eliminado anteriormente
