console.log("--- Ejercicio 20 ---");

let alum1 = { nombre: "Fede", edad: 30, estudios: ["SMR"] };
let alum2 = { nombre: "Sol", edad: 25, estudios: [] };
let clase = ["DWEC", 126, alum1, alum2];

let copia = JSON.parse(JSON.stringify(clase));

alum1.matricula = "331J";

console.log(copia[2]);
console.log(alum1);

alum2.matricula = "884U";

console.log(copia[3]);
console.log(alum2);

clase.push(92);

console.log(copia);
console.log(clase);
