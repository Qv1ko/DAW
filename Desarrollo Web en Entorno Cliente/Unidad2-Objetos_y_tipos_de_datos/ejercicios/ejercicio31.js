console.log("--- Ejercicio 31 ---");

console.log(comprobarDniNie("99999999R"));

function comprobarDniNie(str) {
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

    correct = str.length == 9 ? table[number % 23] == letter : false;

    return correct;
}
