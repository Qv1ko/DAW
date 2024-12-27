console.log("-- Clase 6 --");

// function Perro(raza, edad) {
//     this.raza = raza,
//     this.edad = edad,
//     this.ladra = function () {
//         console.log("guau, tengo " + $this.edad);
//     }
// }

class Perro {
    raza;
    edad;

    constructor(raza, edad) {
        this.raza = raza;
        this.edad = edad;
    }

    ladra() {
        console.log("Guay, tengo " + this.edad);
    }
}

let miPerro = new Perro("mastin", 10);

miPerro.ladra();

class Telefono {
    constructor(marca) {
        this.marca = marca;
    }
    anuncio() {
        return "Ha llegado el nuevo teléfono de " + this.marca;
    }
}

class Modelo extends Telefono {
    constructor(marca, modelo) {
        super(marca);
        this.modelo = modelo;
    }
    anuncio() {
        return super.anuncio() + ", el " + this.marca + " " + this.modelo;
    }
}

let miTelefono = new Modelo("iPhone", "21");
console.log(miTelefono.anuncio());
