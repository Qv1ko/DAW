console.log("--- Ejercicio 22 ---");

/*
 * Crea un script con una función que muestre la hora en formato hora:minutos:segundos cada segundo
 *  en el campo con id=hora.
 */

let campo = document.getElementById("ejercicio22");
let id = setInterval(() => {
    let now = new Date();
    campo.value =
        now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
}, 1000);

console.log("ID intervalo ejercicio 22: " + id);
