console.log("--- Ejercicio 31 ---");

let alumnos = [];
let continuar = true;
let opcion;
let datos;
let contador;
let modificado = false;
let alum;

while (continuar) {
    opcion = prompt(
        "Menú de gestión de alumnos:\n\t1) Dar de alta un alumno\n\t2) Eliminar un alumno\n\t3) Modificar los dato de un alumno\n\t4) Mostar datos de un alumno\n\t5) Mostrar los datos de todos los alumnos\n\t0) Salir"
    );

    switch (opcion) {
        case "1":
            datos = pedirDatos(true, true);
            alumnos.push(new Alumno(datos[1], datos[2], datos[3], datos[0]));
            break;
        case "2":
            if (alumnos.length != 0) {
                datos = pedirDatos(false, true);
                if (alumnos.indexOf((alumno) => alumno.dni == datos) != -1) {
                    alumnos.splice(
                        alumnos.indexOf((alumno) => alumno.dni == datos),
                        1
                    );
                } else {
                    console.log(
                        "No se ha encontrado al alumno con DNI " + datos
                    );
                }
            } else {
                console.log("No hay alumnos almacenados");
            }
            break;
        case "3":
            if (alumnos.length != 0) {
                datos = pedirDatos(false, true);
                for (const alumno of alumnos) {
                    if (alumno.dni == datos) {
                        datos = pedirDatos(true, false);
                        alumno.nombre = datos[0];
                        alumno.apellido1 = datos[1];
                        alumno.apellido2 = datos[2];
                        console.log("Alumno modificado correctamente");
                        modificado = true;
                        break;
                    }
                }
                if (!modificado) {
                    console.log(
                        "No se ha encontrado al alumno con DNI " + datos
                    );
                }
            } else {
                console.log("No hay alumnos almacenados");
            }
            break;
        case "4":
            if (alumnos.length != 0) {
                datos = pedirDatos(false, true);
                alum = alumnos.find((alumno) => alumno.dni === datos);
                if (alum) {
                    console.log(
                        alum.nombre +
                            " " +
                            alum.apellido1 +
                            (alum.apellido2 ? " " + alum.apellido2 : "") +
                            " con DNI " +
                            alum.dni
                    );
                } else {
                    console.log(
                        "No se ha encontrado al alumno con DNI " + datos
                    );
                }
            } else {
                console.log("No hay alumnos almacenados");
            }
            break;
        case "5":
            if (alumnos.length != 0) {
                console.log("Alumnos:");
                alumnos.sort(function (alumno1, alumno2) {
                    if (alumno1.apellido1 > alumno2.apellido1) {
                        return 1;
                    }
                    if (alumno1.apellido1 < alumno2.apellido1) {
                        return -1;
                    } else {
                        if (alumno1.apellido2 > alumno2.apellido2) {
                            return 1;
                        }
                        if (alumno1.apellido2 < alumno2.apellido2) {
                            return -1;
                        } else {
                            if (alumno1.nombre > alumno2.nombre) {
                                return 1;
                            }
                            if (alumno1.nombre < alumno2.nombre) {
                                return -1;
                            } else {
                                return 0;
                            }
                        }
                    }
                });
                for (const alumno of alumnos) {
                    console.log(
                        "  - " +
                            alumno.nombre +
                            " " +
                            alumno.apellido1 +
                            (alumno.apellido2 ? " " + alumno.apellido2 : "") +
                            " / DNI " +
                            alumno.dni
                    );
                }
            } else {
                console.log("No hay alumnos almacenados");
            }
            break;
        case "0":
            continuar = false;
            console.log("Saliendo...");
            break;
        default:
            console.log("La opción seleccionada no es valida");
            break;
    }
}

function pedirDatos(info, pedirDni) {
    let nombre;
    let apellido1;
    let apellido2;
    let dni;
    let retorno;

    if (info) {
        do {
            nombre = prompt("Escribe el nombre del alumno");
        } while (nombre == "" || nombre == null || !isNaN(nombre));
        do {
            apellido1 = prompt("Escribe el primer apellido del alumno");
        } while (apellido1 == "" || apellido1 == null || !isNaN(apellido1));
        apellido2 = prompt("Escribe el segundo apellido del alumno");
    }

    if (pedirDni) {
        do {
            dni = prompt("Escribe el DNI del alumno");
        } while (
            !comprobarDniNie(dni) &&
            (info ? !dniNieRepetido(dni) : dniNieRepetido(dni))
        );
    }

    if (info && pedirDni) {
        if (apellido2 !== undefined) {
            retorno = [dni, nombre, apellido1, apellido2];
        } else {
            retorno = [dni, nombre, apellido1];
        }
    } else if (info) {
        if (apellido2 !== undefined) {
            retorno = [nombre, apellido1, apellido2];
        } else {
            retorno = [nombre, apellido1];
        }
    } else {
        retorno = dni;
    }

    return retorno;
}

function Alumno(nombre, apellido1, apellido2, dni) {
    this.nombre = nombre;
    this.apellido1 = apellido1;
    this.apellido2 = apellido2;
    this.dni = dni;
}

function comprobarDniNie(str = "") {
    let letters = [
        "T",
        "R",
        "W",
        "A",
        "G",
        "M",
        "Y",
        "F",
        "P",
        "D",
        "X",
        "B",
        "N",
        "J",
        "Z",
        "S",
        "Q",
        "V",
        "H",
        "L",
        "C",
        "K",
        "E",
    ];

    str = str == null ? "" : str.toUpperCase();
    let number = isNaN(str.slice(0, 1))
        ? parseInt(
              str[0] == "X"
                  ? "0"
                  : str[0] == "Y"
                  ? "1"
                  : str[0] == "Z"
                  ? "2"
                  : undefined
          ) + str.slice(1, 8)
        : parseInt(str.slice(0, 8));
    let letter = str.slice(8, 9);

    return str.length == 9 ? letters[number % 23] == letter : false;
}

function dniNieRepetido(dni) {
    let repetido = false;

    for (const alumno of alumnos) {
        if (alumno.dni == dni) {
            repetido = true;
        }
    }

    return repetido;
}
