console.log("--- Ejercicio 2 ---");

/*
 * Escribe una función limpiar(arr) que recibe un array de palabras y
 *  devuelve un array sin anagramas.
 */

let arr = ["nap", "teachers", "cheaters", "PAN", "ear", "era", "hectares"];

alert(limpiar(arr)); // "nap,teachers,ear"

function limpiar(arr) {
    let map = new Map();

    for (const palabra of arr) {
        map.set(palabra.split("").sort().toString().toLowerCase(), palabra);
    }

    return Array.from(map.values());
}
