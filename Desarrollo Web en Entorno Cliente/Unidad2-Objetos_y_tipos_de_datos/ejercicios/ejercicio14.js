console.log("--- Ejercicio 14 ---");

/*
 * Crea una función para comprobar si un DNI o NIE es correcto (contiene
 *  8 dígitos y una letra, y que la letra es correcta).
 */

function dni_nie(str) {
    let correct = true;
    let table = [
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
    let text = "El texto pasado es ";

    str = str.toUpperCase();
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

    if (str.length == 9) {
        text =
            "El " +
            (str[0] != "X" && str[0] != "Y" && str[0] != "Z"
                ? "DNI "
                : "NIE ") +
            str +
            " es ";
        correct = table[number % 23] == letter;
    } else {
        correct = false;
    }

    return text + (correct ? "correcto" : "incorrecto");
}

console.log(dni_nie("56221526G"));
console.log(dni_nie("50127621H"));
console.log(dni_nie("76069822J"));
console.log(dni_nie("73126034H"));

console.log(dni_nie("12313207L"));
console.log(dni_nie("74997547K"));
console.log(dni_nie("98319066T"));
console.log(dni_nie("70454006S"));

console.log(dni_nie("Y6478436V"));
console.log(dni_nie("X5997109C"));
console.log(dni_nie("Y7492239A"));
console.log(dni_nie("X3412471F"));
