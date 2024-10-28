/* Ejercicio 1
 * Dado el siguiente array, utiliza el
 * método forEach() para mostrar en la consola cada
 * número multiplicado por 2.
 */
let numeros = [3, 7, 12, 18, 24];

numeros.forEach((item) => console.log(item * 2));

numeros.forEach(function (item) {
    console.log(item * 2);
});

let printNumeros = function (item) {
    console.log(item * 2);
};
numeros.forEach(printNumeros);

/* Ejercicio 2
 * Escribe una función llamada que reciba un string como parámetro
 * y devuelva el string invertido.
 */

let revertirCadena = (str) => Array.from(str).reverse().join("");
console.log(revertirCadena("Hola"));

/* Ejercicio 3
 * Dado el array utiliza el método filter() para
 * crear un nuevo array que contenga solo las temperaturas
 * mayores o iguales a 25 grados.
 */

let temperaturas = [23, 18, 30, 21, 15, 27, 32];

let c = temperaturas.filter((item) => item >= 25);
console.log(c);

function temperaturaMayor(temperatura) {
    return temperatura >= 25;
}
c = temperaturas.filter(temperaturaMayor);
console.log(c);

c = temperaturas.filter(function (item) {
    return item >= 25;
});
console.log(c);

/* Ejercicio 4
 * Usando el siguiente número, redondea el valor a dos decimales. Muestra el resultado en la consola.
 */

let numero = 25.7568;
console.log(numero.toFixed(2));

/* Ejercicio 5
 * Crea una función constructora llamada Empleado que reciba tres
 * parámetros: nombre, puesto y salario. Añade un método llamado
 * incrementarSalario que reciba un porcentaje y aumente el salario del
 * empleado en ese porcentaje. Crea un objeto de tipo Empleado con
 * los valores "Carlos", "Desarrollador" y 2000. Llama al método
 * incrementarSalario con un 10% y muestra el salario actualizadoen consola.
 */

function Empleado(nombre, puesto, salario) {
    (this.nombre = nombre),
        (this.puesto = puesto),
        (this.salario = salario),
        (this.incrementarSalario = function (porcentaje) {
            this.salario = this.salario * (porcentaje / 100 + 1);
        });
}
let empleado1 = new Empleado("Carlos", "Desarrollador", 2000);
empleado1.incrementarSalario(10);
console.log("Salario actualizado: " + empleado1.salario);

/* Ejercicio 6
 * Crea una función constructora Alumno.
 * Tendrá las siguientes propiedades, cuyo valor se pasa cuando se crean los
 * objetos de tipo Alumno:
 * - dni
 * - nombre
 * - estudios
 * - curso
 * - año
 * Cuando se crean los objetos:
 * - dni: se pasa a mayúsculas.
 * - nombre: El nombre se almacena después de haber pasado la primera letra de
 *   cada palabra a mayúsculas y el resto a minúsculas, utilizando la función inicialMayuscula()
 * - estudios: Si no se han introducido estudios, se almacena la palabra "NO ESTUDIOS".
 *   Si se han introducido, se pasan a mayúsculas.
 * - curso: Si no se ha introducido curso, se almacena un 0.
 * - año: Si no se ha introducido un año, se le almacena un 2022.
 * Tendrá los siguientes métodos:
 * - Un método para que cuando hagamos alert() de un objeto de tipo alumno,
 *   aparezca un mensaje del tipo "Alumno: " y el dni del alumno
 */

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

/* Ejercicio 7
 * Tenemos un arrya alumnos que ccontiene alementos de la clase Alumno.
 * Haz una función que recibe el dni a buscar y devuelve el elemento del
 * array que tiene ese código. Si no hay ningún elemento con ese código, devuelve
 * undefined. La búsqueda dentro de la función se debe hacer con el método
 * find() de los arrays.
 */

let alumno2 = new Alumno("99999999R", "miguel");
let alumno3 = new Alumno("93999939J", "juan");
let alumnos = [alumno1, alumno2, alumno3];

let buscarAlumno = (dni) => alumnos.find((alumno) => alumno.dni === dni);
console.log(buscarAlumno("99999999R"));
console.log(buscarAlumno("7295763G"));

function buscarAlumno2(dni) {
    function buscarDni(item) {
        return item.dni == dni;
    }
    let alumno = alumnos.find(buscarDni);
    return alumno;
}
console.log(buscarAlumno("93999939J"));

/* Ejercicio 8
 * Seguimos con el mismo array alumnos. Haz una función que recibe
 * una cadena y devuelve el subarray de alumnos formado por todos
 * los elementos cuyos estudios contienen esa cadena.
 */

function buscarEstudios(estudio) {
    return alumnos.filter((alumno) => alumno.estudios.includes(estudio));
}
console.log(buscarEstudios("NO ESTUDIOS"));

function buscarEstudios2(estudio) {
    function filtrarEstudios(item) {
        return item.estudios.includes(estudio.toUpperCase());
    }
    return alumnos.filter(filtrarEstudios);
}
console.log(buscarEstudios2("DAW"));

/* Ejercicio 9
 * Crea una funcion adivina(valor_min, valor_max), es un juego que pide al
 * usuario que adivine el número entre los dos valores que se pasan como
 * parámetro (incluidos).
 * - valor_min y valor_max deben ser mayores que 0, y valor_max debe ser
 *   mayor que valor_min. Tampoco pueden ser una cadena vacía, ni una cadena
 *   de texto. Si no se cumple lo anterior, se devuelve ukna cadena con un
 *   mensaje de error.
 * - Para ello, calcula un número aleatorio entre los dos números (ambos incluidos).
 * - Pide al usuario que introduzca un número entre valor_min y valor_max
 *   (0 para rendirse y terminar).
 *   - Si se introduce un 0 o hace clic en Cancel, se mostrará un mensaje
 *     que informe de cual era el número.
 *   - Si introduce un número mayor que cero, se mostrará un mensaje que
 *     informe si el número a adivinar es menor o mayor.
 *   - Si introduce un número menor que cero, un cadena de texto, se da
 *     un mensaje de entrada incorrecta y se vuelve a pedir un número.
 */

adivina(1, 20);

function adivina(valor_min, valor_max) {
    if (
        valor_max > 0 &&
        valor_min > 0 &&
        valor_max > valor_min &&
        typeof valor_max == "number" &&
        typeof valor_min == "number"
    ) {
        const NUMERO = parseInt(
            Math.random() * (valor_max + 1 - valor_min) + valor_min
        );
        while (true) {
            let input = prompt("Introduce un número (0 para rendirte)");
            if (input === null || input === 0) {
                console.log("El número era " + NUMERO);
                break;
            } else if (input < 0 || isNaN(input)) {
                console.log("Entrada incorrecta...");
            } else {
                if (input > NUMERO) {
                    alert("El número es menor");
                } else if (input < NUMERO) {
                    alert("El número es mayor");
                } else {
                    console.log("¡Adivinaste el número!");
                    break;
                }
            }
        }
    } else {
        console.log("Error de los valores mínimo o máximo");
    }
}
