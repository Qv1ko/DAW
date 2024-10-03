console.log("--- Ejercicio 13 ---");

function esPalindromo(str) {
    let original = str.replaceAll(" ", "").toLowerCase().split("");
    let invertida = original.concat();

    return original.join("") === invertida.reverse().join("")
        ? "Es palíndromo"
        : "No es palíndromo";
}

console.log(esPalindromo("La ruta nos aporto otro paso natural"));
