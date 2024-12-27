console.log("--- Ejercicio 9 ---");

/*
 * Crea una función constructora denominada Vehículo que tenga estas
 *   propiedades, que se pasan a la función al crear los objetos:
 * - matricula
 * - precio
 * - velocidad máxima
 * También deberá tener estos métodos:
 * - comenzar() que mostrará el mensaje “Encender motor”
 * - parar() que mostrará “Apagar motor”
 * - distanciaMax() que recibirá un parámetro indicando el tiempo de
 *    funcionamiento y devolverá la distancia máxima que puede haber
 *    recorrido, que será el resultado de multiplicar la velocidad
 *    máxima por el tiempo.
 * - toString(), para que cuando se utilice un objeto de tipo Vehiculo
 *    en un lugar donde se espere un string aparezca el texto “Coche
 *    con matricula XXXXX” (siendo XXXXX la matrícula del coche).
 * - valueof() para que cuando se utice un objeto de tipo Vehiculo en
 *    un lugar donde se espere un número, tome el valor del precio
 *    del coche.
 */

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
