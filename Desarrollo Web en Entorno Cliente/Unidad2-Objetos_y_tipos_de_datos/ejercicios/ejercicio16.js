console.log("--- Ejercicio 16 ---");

let arr = ["a", "b"];

arr.push(function () {
    console.log("hola");
});

arr[2](); // Ejercutará en la función e imprimirá en la consola "hola", porque se a guardado en la posición 2 del array la función