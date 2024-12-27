console.log("--- Ejercicio 29 ---");

/*
 * Crea una función llamada muestraSalario(), que recibe dos parámetros:
 * - Un mapa (personas) cuyas claves son los NIF y los valores son los nombres
 * - Un mapa (salarios) cuyas claves son los NIF y los valores son los salarios
 * La función mostrará por consola el NIF, nombre y salario de cada persona.
 */

let personas = new Map()
    .set("58713299A", "Iker")
    .set("01819137K", "Juan")
    .set("11230284M", "Olivia");
salarios = new Map()
    .set("58713299A", 1205)
    .set("01819137K", 1257)
    .set("11230284M", 1297);

muestraSalario(personas, salarios);

function muestraSalario(personas, salarios) {
    for ([nif, nombre] of personas) {
        if (salarios.has(nif)) {
            console.log(
                "El empleado " +
                    nombre +
                    " (" +
                    nif +
                    "), tiene un salario de " +
                    salarios.get(nif)
            );
        }
    }
}
