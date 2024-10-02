console.log("--- Ejercicio 13 ---");

function esPalindromo(str) {
    
    let original = str.replaceAll(" ", "").toLowerCase().split("");
    let invertida = original.reverse();

    return (original.join('') === invertida.join('') ? "Es palíndromo" : "No es palíndromo");

}

console.log(esPalindromo("La ruta nos aportó otro paso natural"));
