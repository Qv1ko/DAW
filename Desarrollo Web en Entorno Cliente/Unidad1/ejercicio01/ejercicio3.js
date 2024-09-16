console.log("--- Ejercicio 3 ---");

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
