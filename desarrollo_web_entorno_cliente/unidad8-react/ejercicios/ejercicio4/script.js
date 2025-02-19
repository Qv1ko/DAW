import ch from "chalk";
import rl from "readline";

console.log("--- Ejercicio 4 ---");

let inter = rl.createInterface(process.stdin, process.stdout);
let name = "";
let age = 0;

const sendMessage = () => {
    console.log(
        age < 18
            ? ch.red(`Bienvenido ${name}`)
            : age > 65
            ? ch.green(`Bienvenido ${name}`)
            : ch.blue(`Bienvenido ${name}`)
    );
};

inter.question("Ingresa tu nombre: ", (input) => {
    name = input;
    inter.question("Ingresa tu edad: ", (input) => {
        age = parseInt(input);
        inter.close();
        sendMessage();
    });
});
