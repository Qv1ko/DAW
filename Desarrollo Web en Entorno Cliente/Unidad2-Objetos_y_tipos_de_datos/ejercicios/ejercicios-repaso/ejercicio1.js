console.log("--- Ejercicio 1 ---");

let daw = new Grupo("DAW", 2);

for (let i = 0; i < 22; i++) {
    daw.alta();
}

console.log(daw.toString());

for (let i = 0; i < 3; i++) {
    daw.baja();
}

console.log(daw.toString());

function Grupo(grupo, curso = 1) {
    this.grupo = grupo;
    this.curso = curso;
    this.numAlumnos = 0;
    this.alta = () => this.numAlumnos++;
    this.baja = () => this.numAlumnos--;
    this.toString = () =>
        "Grupo " +
        this.grupo +
        ", del curso " +
        this.curso +
        ", tiene " +
        this.numAlumnos +
        " alumnos";
}
