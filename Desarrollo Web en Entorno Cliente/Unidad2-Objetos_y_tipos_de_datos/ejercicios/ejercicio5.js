console.log("--- Ejericio 5 ---");

cuenta = {
    titular: "Alex",
    saldo: 0,
    ingresar: function (cantidad) {
        this.saldo += cantidad;
    },
    extraer: function (cantidad) {
        // if (cantidad < saldo) {
        //     this.saldo -= cantidad;
        // } else {
        //     console.log(
        //         "No se puede retirar tanto dinero\n\tDinero disponible: " +
        //             this.saldo
        //     );
        // }
        this.saldo -= cantidad;
    },
    informar: function () {
        console.log(
            "El titular " + this.titular + " tiene " + this.saldo + " euros"
        );
    },
};
