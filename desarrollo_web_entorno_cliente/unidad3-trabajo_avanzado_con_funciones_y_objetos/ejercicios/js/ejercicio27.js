console.log("--- Ejercicio 27 ---");

/*
 * Crea una nueva clase RelojExtendido que herede de Reloj y agregue
 *  la propiedad precision: este es el número de milisegundos que
 *  entre "tics", es decir, el número de milisegundos entre cada
 *  console.log() que muestra la hora. El valor por defecto es 1000 (1 segundo).
 */

class Reloj27 {
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

    start(precision = 1000) {
        this.mostrar();
        this.temporalizador = setInterval(() => this.mostrar, precision);
        // this.temporalizador = setInterval(() => this.mostrar(), precision);
    }
}

class RelojExtendido extends Reloj27 {
    precision;

    constructor({ plantilla }, precision = 1000) {
        super({ plantilla });
        this.precision = precision;
    }

    start() {
        super.start(this.precision);
    }
}

miReloj = new RelojExtendido({ plantilla: "h:m:s" }, 400);
miReloj.start();
