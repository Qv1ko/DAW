console.log("--- Ejercicio 2 ---");

let grupos = [
    { aula: "12", grupo: "751A", curso: 1, ciclo: "ASIR", turno: "D" },
    { aula: "12", grupo: "751B", curso: 1, ciclo: "ASIR", turno: "V" },
    { aula: "11", grupo: "752A", curso: 2, ciclo: "ASIR", turno: "D" },
    { aula: "11", grupo: "752B", curso: 2, ciclo: "ASIR", turno: "V" },
];

muestra(grupos[0]);

function muestra(obj) {
    for (const [clave, valor] of Object.entries(obj)) {
        console.log(clave + ": " + valor);
    }
}
