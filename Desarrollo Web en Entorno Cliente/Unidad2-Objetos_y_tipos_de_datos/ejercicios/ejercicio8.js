console.log("--- Ejercicio 8 ---");

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
