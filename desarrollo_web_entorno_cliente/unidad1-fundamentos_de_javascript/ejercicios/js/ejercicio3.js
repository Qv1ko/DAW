console.log("--- Ejercicio 3 ---");

/*
 * Realizar un script que escriba en la consola los números del 1 al 100.
 * Junto a ellos, escribirá el mensaje "es múltiplo de 2" y "es múltiplo de 3" solo junto a aquellos
 *  números en que se cumpla esta condición. En el caso de los números que sean múltiplos de ambos, se
 *  mostrarán ambos mensajes.
 */

const TEXT2 = " es múltiplo de 2",
    TEXT3 = " es múltiplo de 3";

for (let i = 1; i < 101; i++) {
    console.log(
        `El ${i}${
            i % 2 == 0 && i % 3 == 0
                ? TEXT2 + TEXT3
                : i % 2 == 0
                ? TEXT2
                : i % 3 == 0
                ? TEXT3
                : ""
        }`
    );
}
