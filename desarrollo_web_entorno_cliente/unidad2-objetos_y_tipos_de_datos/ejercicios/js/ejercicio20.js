console.log("--- Ejercicio 20 ---");

/*
 * Escribe la función camelize(str) que convierta palabras separadas por guión en palabras con mayúscula.
 */

console.log(camelize("border-left-width"));
console.log(camelize("mi-cadena-corta"));
console.log(camelize("background-color"));
console.log(camelize("list-style-image"));
console.log(camelize("-webkit-transition"));

function camelize(str) {
    let result = "";
    str = str.split("");

    str.forEach((char, i) => {
        if (char == "-") {
            str.splice(i, 1);
            result += str[i].toUpperCase();
        } else {
            result += char;
        }
    });

    return result;
}
