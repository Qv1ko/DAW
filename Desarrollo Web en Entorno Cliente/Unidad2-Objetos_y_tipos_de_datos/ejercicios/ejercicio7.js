console.log("--- Ejercicio 7 ---");

let calculator = new Calculator();

calculator.read();

alert("sum = " + calculator.sum());
alert("mul = " + calculator.mul());

function Calculator() {
    this.read = function () {
        let value;

        do {
            value = prompt("Primer valor");
        } while (value == "" || value == null || isNaN(value));

        calculator.num1 = Number(value);

        do {
            value = prompt("Segundo valor");
        } while (value == "" || value == null || isNaN(value));

        calculator.num2 = Number(value);
    };
    this.sum = function () {
        return (
            ("num1" in calculator ? this.num1 : 0) +
            ("num2" in calculator ? this.num2 : 0)
        );
    };
    this.mul = function () {
        return (
            ("num1" in calculator ? this.num1 : 0) *
            ("num2" in calculator ? this.num2 : 0)
        );
    };
}
