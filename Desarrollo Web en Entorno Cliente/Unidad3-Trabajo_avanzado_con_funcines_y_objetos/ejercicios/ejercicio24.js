/*
Aquí está el código de la clase Rabbit que extiende a Animal.
Desafortunadamente, los objetos Rabbit no se pueden crear. ¿Que pasa? Arréglalo.
*/
class Animal {
  constructor(name) {
    this.name = name;
  }
}

class Rabbit extends Animal {
  constructor(name) {
    this.name = name;
    this.created = Date.now();
  }
}

let rabbit = new Rabbit("Conejo Blanco"); // Error: this no está definido
alert(rabbit.name);
