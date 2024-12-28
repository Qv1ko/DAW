console.log("--- Ejercicio 10 ---");

/*
 * Crea una función getDateAgo(fecha, días) que devuelva el día del mes que era descontando el número
 *  de días indicados de la fecha que se pasa como parámetro.
 * No se debe modificar la fecha que se pasa como parámetro.
 */

date = new Date(2015, 0, 2);

let getDateAgo = (fecha, dias) =>
    new Date(fecha.getTime() - dias * (24 * 60 * 60 * 1000));

alert(getDateAgo(date, 1)); // 1 Jan 2015
alert(getDateAgo(date, 2)); // 31 Dec 2014
alert(getDateAgo(date, 365)); // 2 Jan 2014
