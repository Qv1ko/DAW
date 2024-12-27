console.log("--- Ejercicio 4 ---");

/*
 * Escribir un script que simule el lanzamiento de dos dados. Hacer
 *  uso de la función Math.random() para obtener números aleatorios
 *  entre 1 y 6 para cada uno de los lanzamientos de los dados.
 * Repetir 36.000 veces el lanzamiento de los dos dados; sumar el
 *  resultado de cada dado y anotarlo en un map.
 * Al final del programa se deben mostrar el número de veces que ha aparecido cada suma.
 */

const TIRADAS = 36000;
let resultados = new Map();
let dado1, dado2;

for (let i = 0; i < TIRADAS; i++) {
    dado1 = tirarDado();
    dado2 = tirarDado();
    guardarResultado(dado1 + dado2);
}

for (let [key, value] of resultados) {
    console.log("El " + key + " ha salido " + value + " veces");
}

function tirarDado() {
    return parseInt(Math.random() * 6 + 1);
}

function guardarResultado(clave) {
    if (resultados.has(clave)) {
        resultados.set(clave, resultados.get(clave) + 1);
    } else {
        resultados.set(clave, 0);
    }
    resultados = new Map(
        [...resultados.entries()].sort((a, b) => parseInt(a) > parseInt(b))
    );
}
