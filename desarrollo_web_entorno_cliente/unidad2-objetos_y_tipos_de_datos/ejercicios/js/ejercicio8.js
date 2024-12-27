console.log("--- Ejercicio 8 ---");

/*
 * Crea una función constructora Accumulator(valorInicial).
 * El objeto que se crea debería:
 * - Almacenar el valorInicial en la propiedad value.
 * - Tendrá un método read() que se utiliza para pedir un valor y
 *    agregarlo a value.
 */

function Accumulator(valorInicial = 0) {
    this.value = valorInicial;

    this.read = function () {
        this.value += +prompt("Escribe el valor de la variable value");
    };
}

let accumulator = new Accumulator(1);

console.log(accumulator);

accumulator.read();

console.log(accumulator);

accumulator.read();

alert(accumulator.value);
