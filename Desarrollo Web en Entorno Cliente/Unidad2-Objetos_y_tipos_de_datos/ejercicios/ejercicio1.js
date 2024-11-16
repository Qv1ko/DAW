console.log("--- Ejercicio 1 ---");

/*
 * Crea un script que:
 * - Crea un objeto user vacío.
 * - Agrega la propiedad name con el valor John.
 * - Agrega la propiedad surname con el valor Smith.
 * - Cambia el valor de name a Pete.
 * - Elimina la propiedad name del objeto.
 */

let user = new Object();

user.name = "John";
user.surname = "Smith";
console.log(user);

user.name = "Pete";
console.log(user);

delete user.name;
console.log(user);
