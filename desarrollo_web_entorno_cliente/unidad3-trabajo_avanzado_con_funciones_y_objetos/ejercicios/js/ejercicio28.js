console.log("--- Ejercicio 28 ---");

/*
 * Crea dos clases más, ambas deben heredar de Vehículo:
 * - Coche: cuya velocidad máxima será 120 y sobrescribirá el método
 *    parar para que muestre "Aparcar".
 * - Avión: cuya velocidad máxima será 1000 y sobrescribirá los
 *    métodos comenzar, para que muestre "Despegar", y parar, para
 *    que muestre "Aterrizar".
 */

class Vehiculo28 {
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

    distanciaMax(minutos) {
        return this.velocidadMaxima * minutos;
    }
}

class Coche extends Vehiculo28 {
    constructor(color, marca, modelo) {
        super(color, marca, modelo, 120);
    }

    parar() {
        return "Aparcar";
    }
}

class Avion extends Vehiculo28 {
    constructor(color, marca, modelo) {
        super(color, marca, modelo, 1000);
    }

    comenzar() {
        return "Despegar";
    }

    parar() {
        return "Aterrizar";
    }
}

let coche1 = new Coche("Azul", "Tesla", "Model S");
console.log(coche1.comenzar());
console.log(coche1.parar());
console.log(coche1.distanciaMax(50));

let avion1 = new Avion("Blanco", "Boeing", "747");
console.log(avion1.comenzar());
console.log(avion1.parar());
console.log(avion1.distanciaMax(120));
