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
