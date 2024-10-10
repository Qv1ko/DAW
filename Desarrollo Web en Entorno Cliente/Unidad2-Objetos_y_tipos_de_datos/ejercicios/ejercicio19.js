console.log("--- Ejercicio 19 ---");

let arr = [5, 3, 8, 1];

filterRangeInPlace(arr, 1, 4);

alert(arr);

function filterRangeInPlace(arr, a, b) {
    for (let i = arr.length; i >= 0; i--) {
        if (arr[i] < Math.min(a, b) || arr[i] > Math.max(a, b)) {
            arr.splice(i, 1);
        }
    }
}
