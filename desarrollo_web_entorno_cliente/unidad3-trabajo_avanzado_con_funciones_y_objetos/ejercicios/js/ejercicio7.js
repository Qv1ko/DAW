console.log("--- Ejercicio 7 ---");

/*
 * Crea un objeto Date para la fecha: Feb 20, 2012, 3:12am. La zona
 *  horaria es local.
 */

let fecha = new Date(Date.UTC(2012, 1, 20, 3, 12, 0, 0));

// alert(fecha.toLocaleDateString("es-ES"));
alert(fecha);
