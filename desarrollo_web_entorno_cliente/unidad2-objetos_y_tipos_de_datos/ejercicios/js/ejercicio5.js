console.log("--- Ejercicio 5 ---");

/*
 * Crea un objeto literal cuenta con las siguientes propiedades:
 * - titular: su valor es “Alex”.
 * - saldo: su valor inicial es 0.
 * También deberá tener estos métodos:
 * - ingresar(cantidad): permite añadir dinero a la cuenta, pasando
 *    la cantidad como parámetro.
 * - extraer(cantidad): permite retirar dinero de la cuenta, pasando
 *    la cantidad como parámetro.
 * - informar(): devuelve la información del estado de la cuenta: un
 *    texto con el titular y el saldo.
 */

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
