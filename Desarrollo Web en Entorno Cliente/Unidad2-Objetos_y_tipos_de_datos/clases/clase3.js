console.log("-- Clase 3 --");

function Persona(nombre, apellido) {
    this.nombre = nombre;
    this.apellido = apellido;
    this.saluda = function () {
        console.log(`Hola, soy ${this.name} ${this.apellido}`);
    };
    this.asignarEdad = function (edad) {
        this.edad = edad;
    };
    this.toString = function () {
        return this.nombre + " " + this.apellido;
    };
    this.valueOf = function () {
        return this.edad;
    };
}

let pepe = new Persona("Pepe", "Pérez");

pepe.saluda();

pepe.asignarEdad(40);

alert(pepe);

let nombre = "jose";

alert(nombre.toUpperCase());

let million = 1e6;

let valorHex = 0xff; // 0x = Hexadecimal
console.log("Número hex: " + valorHex);
let valorOct = 0o337; // 0o = Octal
console.log("Número octal: " + valorOct);
let valorBin = 0b110; // 0b = Binario
console.log("Número binario: " + valorBin);

// console.log(28..toString());

console.log("Número redondeado floor: " + Math.floor(4.1));
console.log("Número redondeado ceil: " + Math.ceil(4.1));
console.log("Número redondeado round: " + Math.round(4.1));

let num = 12.345678;
console.log(num.toFixed(2));

console.log("Parse int: " + parseInt("3.15px"));
console.log("Parse float: " + parseFloat("3.15"));

console.log("Número random: " + Math.random());

console.log("Número maximo: " + Math.max(1, 2, 3, 4));
console.log("Número minimo: " + Math.min(1, 2, 3, 4));
console.log("Potencia de dos números: " + Math.pow(3, 4));
