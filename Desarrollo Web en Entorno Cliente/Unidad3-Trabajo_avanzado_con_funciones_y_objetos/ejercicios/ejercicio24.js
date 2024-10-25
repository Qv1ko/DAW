console.log("--- Ejercicio 24 ---");

class Vehiculo {
    color;
    marca;
    modelo;
    velocidadMaxima;

    constructor(color, marca, modelo, velocidadMaxima) {
        this.color = color;
        this.marca = marca;
        this.modelo = modelo;
        this.velocidadMaxima = velocidadMaxima;
    }

    comenzar() {
        return "Encender motor";
    }

    parar() {
        return "Apagar motor";
    }

    distanciaMax(tiempo) {
        return this.velocidadMaxima * tiempo;
    }
}

let vehiculo14 = new Vehiculo("Blanco", "Renault", "Duster", 144);

console.log(vehiculo14.comenzar());
console.log(vehiculo14.parar());
console.log(
    "El " +
        vehiculo14.marca +
        " " +
        vehiculo14.modelo +
        " recorre " +
        vehiculo14.distanciaMax(60) +
        " km en 1 hora"
);
