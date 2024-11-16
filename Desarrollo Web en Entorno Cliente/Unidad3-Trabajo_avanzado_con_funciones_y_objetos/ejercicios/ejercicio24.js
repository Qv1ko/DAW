console.log("--- Ejercicio 24 ---");

/*
 * Crea una clase denominada Vehículo que tenga algunas características
 *  como el color, marca, modelo y la velocidad máxima que puede alcanzar.
 * También tendrá tres métodos además del constructor: comenzar que
 *  mostrará el mensaje "Encender motor", parar que mostrará "Apagar motor" y
 *  distanciaMax que recibirá un parámetro con indicando el tiempo de
 *  funcionamiento y calculará la distancia máxima que puede haber recorrido.
 */

class Vehiculo24 {
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

let vehiculo14 = new Vehiculo24("Blanco", "Renault", "Duster", 144);

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
