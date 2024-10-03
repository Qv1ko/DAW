console.log("--- Ejercicio 9 ---");

function Vehiculo(matricula, precio, velocidadMaxima) {
    this.matricula = matricula;
    this.precio = precio;
    this.velocidadMaxima = velocidadMaxima;

    this.comenzar = function () {
        console.log("Encender motor");
    };

    this.parar = function () {
        console.log("Apagar motor");
    };

    this.distanciaMax = function (time) {
        return this.velocidadMaxima * time + " kilometros";
    };

    this.toString = function () {
        return "Coche con matrícula " + this.matricula;
    };

    this.valueOf = function () {
        return this.precio;
    };
}

let volvo = new Vehiculo("2153FFG", 30000, 170);

volvo.comenzar();

volvo.parar();

console.log(volvo.distanciaMax(2));

console.log(volvo.toString());

console.log(volvo.valueOf());
