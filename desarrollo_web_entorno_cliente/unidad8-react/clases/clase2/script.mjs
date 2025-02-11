import { sumar as sum, multiplicar as mul } from "./modules/operaciones.mjs";

function rand() {
    return Math.random() * 8;
}

console.log("Suma: ", sum(rand(), rand()));
console.log("Multiplicación: ", mul(rand(), rand()));
