console.log("--- Ejercicio 19 ---");

/*
 * Crea un reloj que muestra la fecha actual. Cuando se pulsa en Start, muestra
 * la hora/minutos/segundos, que se actualiza cada segundo; y cuando se pulsa en
 * Stop, deja de actualizarse.
 */

let clock = document.getElementById("clock");
let clockId;

function clockStart() {
    clockId = setInterval(() => {
        now = new Date();
        clock.textContent =
            (now.getHours() < 10 ? "0" + now.getHours() : now.getHours()) +
            ":" +
            (now.getMinutes() < 10
                ? "0" + now.getMinutes()
                : now.getMinutes()) +
            ":" +
            (now.getSeconds() < 10 ? "0" + now.getSeconds() : now.getSeconds());
    }, 1000);
}

function clockStop() {
    clearInterval(clockId);
}
