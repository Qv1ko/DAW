// --- Ejercicio 1 ---

let alumno1 = new Alumno("123456875x ", "pepe", 1, "DAW", 2022);
alert(alumno1);

function Alumno(dni, nombre, curso = 0, estudios = "NO ESTUDIOS", ano = 2022) {
    this.dni = dni.toUpperCase();
    this.nombre = inicialMayuscula(nombre);
    this.curso = curso;
    this.estudios = estudios.toUpperCase();
    this.ano = ano;
    this.toString = () => "Alumno: " + this.dni;
}

function inicialMayuscula(nombre) {
    result = [];
    palabras = nombre.split(" ");

    for (palabra of palabras) {
        result.push(palabra[0].toUpperCase() + palabra.substring(1));
    }

    return result.join(" ");
}

// --- Ejercicio 2 ---

let alumno2 = new Alumno("99999999R", "miguel");
let alumno3 = new Alumno("93999939J", "juan");
let alumno4 = new Alumno("7193829R", "jose");
let alumno5 = new Alumno("702756S", "rebeca");
let alumnos = [alumno1, alumno2, alumno3, alumno4, alumno5];

let buscarAlumno = (dni) => alumnos.find((alumno) => alumno.dni === dni);

console.log(buscarAlumno("7193829R"));
console.log(buscarAlumno("7295763G"));

// --- Ejercicio 3 ---

function arrayPorEstudio(estudio) {
    return alumnos.filter((alumno) => alumno.estudios == estudio);
}

console.log(arrayPorEstudio("NO ESTUDIOS"));

// --- Ejercicio 4 ---

adivina(1, 20);

function adivina(valor_min, valor_max) {
    if (
        valor_max > 0 &&
        valor_min > 0 &&
        valor_max > valor_min &&
        valor_max != null &&
        valor_min != null &&
        isFinite(valor_max) &&
        isFinite(valor_min)
    ) {
        const NUMERO = parseInt(
            Math.random() * (valor_max - valor_min) + valor_min
        );
        while (true) {
            let input = prompt("Introduce un número (0 para rendirte)");
            if (input > 0) {
                if (input > NUMERO) {
                    alert("El número es menor");
                } else if (input < NUMERO) {
                    alert("El número es mayor");
                } else {
                    console.log("¡Adivinaste el número!");
                    break;
                }
            } else if (input.trim() == "" || isNaN(input)) {
                console.log("Entrada incorrecta...");
            } else if (input == 0 || input == null) {
                console.log("El número era " + NUMERO);
                break;
            }
        }
    } else {
        console.log("Error de los valores mínimo o máximo");
    }
}
