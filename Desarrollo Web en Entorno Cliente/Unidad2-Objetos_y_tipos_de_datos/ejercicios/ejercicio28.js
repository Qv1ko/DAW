console.log("--- Ejercicio 28 ---");

let arr = [1, 2, 3, 4];
let vaciarArray = (arr) => arr.splice(0, arr.length);

// function vaciarArray(arr) {
//     for (let i = 0; i < arr.length; i++) {
//         delete arr[i];
//     }
// }

vaciarArray(arr);

console.log(arr);
