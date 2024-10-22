let numeros = [11, 22, 33, 44, 55, 66, 77, 88, 99];

numeros.forEach((numero, indice) => {
    // console.log("Elemento " + indice + " = " + numero);
    imprime(numero, indice);
});

function imprime(elemento, indice) {
    console.log("Elemento " + indice + " = " + elemento);
}

let resultado = numeros.find((elemento) => {
    return elemento < 5;
});

console.log("El primer valor más pequeño que 5 es " + resultado); // undefined si no existe ninguno

resultado = numeros.find((elemento) => {
    return elemento % 2 == 0;
});

console.log("El primer valor par es " + resultado); // undefined si no existe ninguno

resultado = numeros.map((elemento) => {
    return elemento * 2;
});

console.log(resultado);
