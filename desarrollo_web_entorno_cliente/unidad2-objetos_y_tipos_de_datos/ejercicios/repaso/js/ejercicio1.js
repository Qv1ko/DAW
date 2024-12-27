console.log("--- Ejercicio 1 ---");

/*
 * Crea una función constructora denominada Grupo que tenga estas
 *  propiedades: grupo, curso y numAlumnos.
 * Cuando se crean objetos, se pasará como parámetro el grupo y el
 *  curso. Si no se pasa curso, su valor será 1.
 * La propiedad numAlumnos será un número, cuyo valor inicial será 0.
 * Deberá contener estos métodos:
 * - alta(): incrementará en 1 la propiedad numAlumnos
 * - baja(): decrementará en 1 la propiedad numAlumnos
 * - toString(), para que cuando se utilice un objeto de tipo Grupo
 *    aparezca el texto "Grupo XXXX, del curso XX, tiene XXX alumnos"
 */

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
