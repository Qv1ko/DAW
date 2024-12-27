console.log("-- Clase 1 --");

persona = {
    nombre: "Pepe",
    apellido: "Pérez",
    saludar: function () {
        console.log("Hola soy " + this.nombre);
    },
};

persona.nombre;
