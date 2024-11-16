console.log("--- Ejercicio 25 ---");

/*
 * Reescríbe la clase Reloj con la sintaxis de clase.
 */

class Reloj25 {
    temporalizador;
    plantilla;

    constructor({ plantilla }) {
        this.plantilla = plantilla;
    }

    mostrar() {
        let date = new Date();

        let hours = date.getHours();
        if (hours < 10) hours = "0" + hours;

        let mins = date.getMinutes();
        if (mins < 10) mins = "0" + mins;

        let secs = date.getSeconds();
        if (secs < 10) secs = "0" + secs;

        let output = this.plantilla
            .replace("h", hours)
            .replace("m", mins)
            .replace("s", secs);

        console.log(output);
    }

    stop() {
        clearInterval(this.temporalizador);
    }

    start() {
        this.mostrar();
        this.temporalizador = setInterval(() => this.mostrar, 1000);
    }
}

let miReloj = new Reloj25({ plantilla: "h:m:s" });
miReloj.start();
