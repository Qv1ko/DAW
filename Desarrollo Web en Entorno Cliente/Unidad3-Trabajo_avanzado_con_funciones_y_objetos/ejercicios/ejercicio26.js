console.log("--- Ejercicio 26 ---");

class Animal {
    constructor(name) {
        this.name = name;
    }
}

class Rabbit extends Animal {
    constructor(name) {
        // this.name = name; // Da error porque no se establece el valor en la clase padre de forma correcta
        super(name);
        this.created = Date.now();
    }
}

let rabbit = new Rabbit("Conejo Blanco");
alert(rabbit.name);
