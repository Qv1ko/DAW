console.log("--- Ejercicio 3 ---");

let grupos = [
    { aula: "11", grupo: "752A", curso: 2, ciclo: "ASIR", turno: "D" },
    { aula: "12", grupo: "751A", curso: 1, ciclo: "ASIR", turno: "D" },
    { aula: "12", grupo: "751B", curso: 1, ciclo: "ASIR", turno: "V" },
    { aula: "11", grupo: "752B", curso: 2, ciclo: "ASIR", turno: "V" },
];

let grupos12 = grupos.filter((item) => item.aula == "12");
console.log(grupos12);

grupos.sort((g1, g2) => g1.curso - g2.curso);
console.log(grupos);
