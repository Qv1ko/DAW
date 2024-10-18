console.log("--- Ejercicio 4 ---");

const TIRADAS = 36000;
let resultados = new Map();
resultados.set(1, 0);
resultados.set(2, 0);
resultados.set(3, 0);
resultados.set(4, 0);
resultados.set(5, 0);
resultados.set(6, 0);
let dado1, dado2;

for (let i = 0; i < TIRADAS; i++) {
    dado1 = tirarDado();
    dado2 = tirarDado();
    resultados.set(dado1, resultados.get(dado1) + 1);
    resultados.set(dado2, resultados.get(dado2) + 1);
}

for (let [key, value] of resultados) {
    console.log(key + ": ha salido " + value + " veces");
}

function tirarDado() {
    return parseInt(Math.random() * 6 + 1);
}
