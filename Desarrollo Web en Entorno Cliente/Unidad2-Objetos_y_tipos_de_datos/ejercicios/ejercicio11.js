console.log("--- Ejercicio 11 ---");

let number;
let ganadores = [];
let complementario;
let reintegro;

// let ganadorRepetido = function ganadorRepetido(ganadores, number) {
//     let exist = false;
//     ganadores.forEach((ganador) => {
//         if (number == ganador) {
//             exist = true;
//         }
//     });
//     return exist;
//     // for (let ganador of ganadores) {
//     //     if (number == ganador) {
//     //         return true;
//     //     }
//     // }
//     // return false;
// };

for (let i = 0; i < 6; i++) {
    do {
        number = parseInt(Math.random() * 49) + 1;
        // } while (ganadorRepetido(ganadores, number));
    } while (ganadores.includes(number));
    ganadores[i] = number;
}

do {
    number = parseInt(Math.random() * 49) + 1;
    // } while (ganadorRepetido(ganadores, number));
} while (ganadores.includes(number));

complementario = number;

reintegro = parseInt(Math.random() * 10);

console.log("Combinación ganadora: " + ganadores);
// console.log("Combinación ganadora: " + ganadores.join(","));
console.log("Complementario: " + complementario);
console.log("Reintegro: " + reintegro);
