if ("0") {
    alert("Hello");
}

if (0) {
    alert("Hello");
}

// ---

// let result = a + b < 4 ? "Debajo" : "Encima";

// ---

let a = 1,
    b = 1;

let c = ++a; // Instancia el número despues de incrementarse
let d = b++; // Primero se instancia el número y despues se incrementa la variable

// a) 2
console.log("a = " + a);
// b) 2
console.log("b = " + b);
// c) 2
console.log("c = " + c);
// d) 1
console.log("d = " + d);

// ---

a = 2;

let x = 1 + (a *= 2);
// a) 4
console.log("a = " + a);
// x) 5
console.log("x = " + x);

// ---

console.log("" + 1 + 0); // "10"
console.log("" - 1 + 0); // -1
console.log(true + false); // 1
console.log(6 / "3"); // 2
console.log("2" * "3"); // 6
console.log(4 + 5 + "px"); // 9px
console.log("$" + 4 + 5); // $45
console.log("4" - 2); // 2
console.log("4px" - 2); // NaN
console.log("  -9  " + 5); //   -9  5
console.log("  -9  " - 5); // -14
console.log(null + 1); // 1
console.log(undefined + 1); // NaN
console.log(" \t \n" - 2); // -2

// ---

a = +prompt("¿Primer número?", 1);
b = +prompt("¿Segundo número?", 2);

alert(a + b); // 12

// ---

const BIRTHDAY = "18.04.1982";

const age = someCode(BIRTHDAY);

// ---

let name = "Ilya";

alert(`Hola ${1}`); // Hola 1

alert(`Hola ${"name"}`); // Hola name

alert(`Hola ${name}`); // Hola Ilya

// ---

5 > 4; // true
"apple" > "pineapple"; // false
"2" > "12"; // true
undefinned == null; // true
undefinned === null; // false
null == "\n0\n"; // false
null === +"\n0\n"; // false
0 == +"\n0\n"; // true
0 == false; // true

function saluda(nombre, apellido) {
    if (nombre == undefined) return "Nombre sin definir";
    // nombre = nombre ? nombre : "";
    // apellido = apellido ? apellido : "";
    console.log("***");
    return nombre + " " + apellido;
}

console.log(saluda());
console.log(saluda("Jose"));

function saludaSiempre(nombre = "Manuel", apellido = "Gutierrez") {
    return nombre + " " + apellido;
}

console.log(saludaSiempre(undefined, "Ojaz")); // Ojaz
console.log(saludaSiempre(null, "Ojaz")); // nullOjaz
