let miObjeto = {
    prop1: val1,
    prop2: val2,
    "prop 3": val3, // Las propiedades se pueden declarar como cadenas cuando tienen un espacio en blanco
};

miObjeto["prop 3"]; // Las propiedades de un objeto en formato cadena se accede entre corchetes

montana = {
    altura: 1000,
    localidad: "Burgos",
    "por determinar": null,
};

console.log(montana.altura);
console.log(montana.localidad);
console.log(montana["por determinar"]);

let propiedad = "localidad";

console.log(montana[propiedad]);

console.log(montana["loca" + "lidad"]);

console.log(montana);

propiedad = "altura";

console.log("la propiedad " + propiedad + " vale " + montana[propiedad]);

// function saludar() {
//     console.log("Hola soy " + this.nombre);
// }

persona = {
    nombre: "Pepe",
    apellido: "Pérez",
    curso: 2,
    // saludar: function () {
    //     console.log("Hola soy " + this.nombre);
    // },
    // saludar: saludar(),
    saludar() {
        console.log("Hola soy " + this.nombre);
    },
};

console.log(persona.saludar());

console.log(persona["saludar"]());

persona.segundoApellido = "Gonzalez";

console.log(persona);

// let persona = new Object(); // Sobreescribe el objeto

delete persona.segundoApellido;

console.log(persona);

cosa = {
    propiedad: "val1",
};

cosa["propiedad2"], "propiedad" in cosa;

"propiedad1" in cosa;

cosa["propiedad2"] = 1;

for (let propiedad in cosa) {
    console.log(propiedad + ":" + cosa[propiedad]);
}

cosa.toString = function () {
    return "Propiedad 1: " + this.propiedad1;
};

cosa.toString();

typeof cosa;

typeof true;
