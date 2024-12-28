console.log("--- Ejercicio 30 ---");

/*
 * Crea una función constructora Disco que almacene la siguiente información:
 * - Nombre del disco.
 * - Grupo de música o cantante.
 * - Año de publicación.
 * - Tipo de música (podrá ser "rock", "pop", "punk" o "indie").
 * - Localización: almacenará un número de estantería.
 * - Prestado: almacenará un valor booleano. Por defecto será false.
 * La función constructora se puede llamar con o sin parámetros:
 * - Sin parámetros: las 4 primeras propiedades serán cadenas vacías, la localización será 0 por
 *    defecto y prestado estará a false.
 * - Con parámetros: se pasarán solo las cinco primeras propiedades; la propiedad prestado será false.
 * Además, tendrá los siguientes métodos:
 * - Un método que permitirá cambiar el número de estantería en la localización.
 * - Un método que permitirá cambiar la propiedad prestado.
 * - Un método que muestre toda la información de un disco.
 * El programa hará lo siguiente:
 * - Creará un objeto de tipo disco, para lo cual te pide los parámetros.
 * - Presente un menú que permita:
 *   - Mostrar la información del disco que se ha añadido
 *   - Cambiar el disco de estantería
 *   - Prestar un disco
 *   - Devolver un disco
 *   - Terminar
 */

let disco45 = new Disco("More than a feeling", "Boston", "1976", "rock", 4);
let salir = false;
let opcion;

while (!salir) {
    opcion = prompt(
        "Menú de opciones:\n\t1) Mostrar información del disco\n\t2) Cambiar de estantería\n\t3) Prestar disco\n\t4) Devolver disco\n\t0) Salir"
    );
    switch (opcion) {
        case "1":
            disco45.printDisco();
            break;
        case "2":
            disco45.cambioEstanteria(prompt("Número de la nueva estanteria"));
            break;
        case "3":
            disco45.cambioPrestamo(true);
            break;
        case "4":
            disco45.cambioPrestamo(false);
            break;
        case "0":
            salir = true;
            console.log("Saliendo...");
            break;
        default:
            console.log("La opción seleccionada no es valida");
            break;
    }
}

function Disco(
    nombre = "",
    grupo = "",
    anoPublicacion = "",
    genero = "",
    localizacion = 0
) {
    this.nombre = nombre;
    this.grupo = grupo;
    this.publicacion = isNaN(anoPublicacion) ? 0 : anoPublicacion;
    this.genero = ["rock", "pop", "punk", "indie"].includes(
        genero.toLocaleLowerCase()
    )
        ? genero
        : "";
    this.localizacion = localizacion;
    this.prestado = false;
    this.cambioEstanteria = (nuevaEstanteria) => {
        if (
            nuevaEstanteria != null &&
            nuevaEstanteria != "" &&
            !isNaN(nuevaEstanteria)
        ) {
            this.localizacion = nuevaEstanteria;
        } else {
            console.log("El número de estantería es incorrecto");
        }
    };
    this.cambioPrestamo = (prestamo) => {
        if (prestamo || !prestamo) {
            this.prestado = prestamo;
        }
    };
    this.printDisco = () => {
        console.log(
            "El disco de " +
                this.genero +
                ' "' +
                this.nombre +
                '" de ' +
                this.grupo +
                " publicado en el año " +
                this.publicacion +
                "\n" +
                (this.prestado
                    ? "No disponible - Estantería "
                    : "Disponible en la estantería ") +
                this.localizacion
        );
    };
}
