console.log("--- Ejercicio 13 ---");

function esPalindromo(str) {
    let original = str.replaceAll(" ", "").toLowerCase();
    let invertida = original.split("").reverse().join("");

    return original === invertida ? "Es palíndromo" : "No es palíndromo";
}

console.log(esPalindromo("La ruta nos aporto otro paso natural"));
console.log(esPalindromo("Hola"));
console.log(esPalindromo("Yo hago yoga hoy"));
