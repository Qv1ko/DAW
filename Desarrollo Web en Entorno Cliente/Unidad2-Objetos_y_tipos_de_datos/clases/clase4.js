let str = "patatA";

console.log(str.charCodeAt(1));
console.log(String.fromCodePoint(97));

let cad = "   hola      hola    ";

console.log(cad.trim());
console.log(cad);

console.log(cad.repeat(2));

console.log(cad.split("o"));
console.log(cad.split(" "));

console.log(ultimoMayus("hola"));

function ultimoMayus(str) {
    return str.slice(0, str.length - 1) + str[str.length - 1].toUpperCase();
}

console.log(ultimoMayus2("hola"));

function ultimoMayus2(str) {
    let result = "";

    for (i = 0; i < str.length; i++) {
        result += i == str.length - 1 ? str[i].toUpperCase() : str[i];
    }

    return result;
}

console.log(["h", "o", "l", "a"].join("-"));
