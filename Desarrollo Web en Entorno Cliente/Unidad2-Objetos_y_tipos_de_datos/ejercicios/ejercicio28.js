console.log("--- Ejercicio 28 ---");

/*
 * Crea una función llamada vaciarArray(), que recibe como parámetro
 *  un array y vacía su contenido, es decir, después de llamar a esta
 *  función, el array pasado como parámetro no tendrá datos.
 */

arr = [1, 2, 3, 4];
let vaciarArray = (arr) => arr.splice(0);

// function vaciarArray(arr) {
//     for (let i = 0; i < arr.length; i++) {
//         delete arr[i];
//     }
// }

vaciarArray(arr);

// arr.length = 0;

console.log(arr);
