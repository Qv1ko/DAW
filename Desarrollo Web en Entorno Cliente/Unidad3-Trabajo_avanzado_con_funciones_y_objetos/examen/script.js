// Ejercicio 1

function suma(...params) {
    let sum = 0;
    for (let num of params) {
        if (Number(num)) {
            sum += Number(num);
        }
    }
    return sum;
}

console.log("Pruebas ejercicio 1:");
console.log(suma(1, 2, 3));
console.log(suma(1, { a: 2, b: 3 }, 4));
console.log(suma(1, [2, 3], 4, "5", 6));
console.log(suma(1, null, "3", 4));
console.log(suma());

// Ejercicio 2

function convertirObjeto(texto) {
    let atributos = texto.split(", ");
    let mapa = new Map();

    for (let atributo of atributos) {
        mapa.set(
            atributo.split(": ")[0],
            Number(atributo.split(": ")[1])
                ? Number(atributo.split(": ")[1])
                : atributo.split(": ")[1]
        );
    }

    return Object.fromEntries(mapa);
}

console.log("Pruebas ejercicio 2:");
console.log(
    convertirObjeto(
        "nombre: juan, apellidos: Perez Sanches, edad: 10, nivel: base"
    )
);

// Ejercicio 3.1

class Elemento {
    codigo;
    descripcion;
    fecAlta;
    fecBaja;

    constructor(codigo, descripcion) {
        this.codigo = codigo;
        this.descripcion = descripcion;
        this.fecAlta = new Date();
        this.fecBaja = undefined;
    }

    baja() {
        this.fecBaja = new Date();
    }
}

let inventario = [
    new Elemento("01", "Mesa"),
    new Elemento("05", "Silla"),
    new Elemento("02", "Mesa"),
];

// Ejercicio 3.2

function buscarElemento(cod) {
    return inventario.find((elemento) => elemento.codigo == cod);
}
// buscarElemento = (cod) => inventario.find((elemento) => elemento.codigo == cod);

console.log("Pruebas ejercicio 3.2:");
console.log(buscarElemento("05"));
console.log(buscarElemento("03"));

// Ejercicio 3.3

function obtenerElementos(desc) {
    return inventario.filter((elemento) => elemento.descripcion == desc);
}
// obtenerElementos = (desc) => inventario.filter((elemento) => elemento.descripcion == desc);

console.log("Pruebas ejercicio 3.3:");
console.log(obtenerElementos("Mesa"));
console.log(obtenerElementos("Cuadro"));

// Ejercicio 4

class Armario extends Elemento {
    constructor(codigo, descripcion, alto, ancho, fondo) {
        super(codigo, descripcion);
        this.alto = alto;
        this.ancho = ancho;
        this.fondo = fondo;
    }
}

let armario1 = new Armario("123", "Armario alto", 2, 1.89, 0.5);
armario1.baja();

console.log("Pruebas ejercicio 4:");
console.log(armario1);
