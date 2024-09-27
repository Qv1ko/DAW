console.log("--- Ejercicio 6 ---");

calculator = {
    read: function () {
        calculator.num1 = +prompt("Primer valor");
        calculator.num2 = +prompt("Segundo valor");
    },
    sum: function () {
        return (
            (this.num1 in calculator ? this.num1 : 0) +
            (this.num2 in calculator ? this.num2 : 0)
        );
    },
    mul: function () {},
};
