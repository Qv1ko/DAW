console.log("--- Ejercicio 11 ---");

let number;
let ganadores = [];
let complementario;
let reintegro;

let ganadorRepetido = function ganadorRepetido(ganadores, number) {
    // ganadores.forEach(ganador => {
    //     if (number == ganador) {
    //         return true;
    //     }
    // });
    // return false;
    for (let ganador of ganadores) {
        if (number == ganador) {
            return true;
        }
    }
    return false;
}

for (let i = 0; i < 6; i++) {
    do {
        number = parseInt(Math.random() * 49) + 1;
    } while (ganadorRepetido(ganadores, number));
    ganadores[i] = number;
}

do {
    number = parseInt(Math.random() * 49) + 1;
} while (ganadorRepetido(ganadores, number));

complementario = number;

reintegro = parseInt(Math.random() * 10);

console.log("Combinación ganadora: " + ganadores.toString());
console.log("Complementario: " + complementario);
console.log("Reintegro: " + reintegro);