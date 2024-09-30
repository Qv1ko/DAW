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
        return velocidadMaxima * time + " kilometros";
    };

    this.toString = function () {
        console.log("Coche con matrícula " + this.matricula);
    };

    this.valueof = function () {
        return precio + " €";
    };
}

let volvo = new Vehiculo("2153FFG", 30000, 170);

volvo.comenzar();

volvo.parar();

console.log(volvo.distanciaMax(2));

volvo.toString();

console.log(volvo.valueof());
