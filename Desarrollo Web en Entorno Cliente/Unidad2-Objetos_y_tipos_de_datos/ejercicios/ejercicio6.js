console.log("--- Ejercicio 6 ---");

calculator = {
    read: function () {
        let value;

        do {
            value = prompt("Primer valor");
        } while (value == "" || value == null || isNaN(value));
        calculator.num1 = Number(value);
        do {
            value = prompt("Segundo valor");
        } while (value == "" || value == null || isNaN(value));
        calculator.num2 = Number(value);
    },
    sum: function () {
        return (
            ("num1" in calculator ? this.num1 : 0) +
            ("num2" in calculator ? this.num2 : 0)
        );
    },
    mul: function () {
        return (
            ("num1" in calculator ? this.num1 : 0) *
            ("num2" in calculator ? this.num2 : 0)
        );
    },
};

calculator.read();

alert(calculator.sum());
alert(calculator.mul());
