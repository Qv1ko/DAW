console.log("--- Ejercicio 19 ---");

/*
 * Escribe una función filterRangeInPlace(arr, a, b) que recibe como parámetros un array y dos
 *  valores a, y b; y elimine de array todos los elementos excepto aquellos cuyo valor se encuentre
 *  entre a y b (tampoco debe eliminar a ni b).
 * Los elementos del array, a y b: son numéricos.
 * La función solo debe modificar el array. No debe devolver nada.
 */

arr = [5, 3, 8, 1];

filterRangeInPlace(arr, 1, 4);

alert(arr);

function filterRangeInPlace(arr, a, b) {
    for (let i = arr.length; i >= 0; i--) {
        if (arr[i] < Math.min(a, b) || arr[i] > Math.max(a, b)) {
            arr.splice(i, 1);
        }
    }
}
