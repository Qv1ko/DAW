console.log("--- Ejercicio 24 ---");

/*
 * Escribe una función a la que pasamos el array users y devuelve un
 *  array con los nombres de los usuarios.
 */

let john = {
    user: "John",
    age: 25,
};
let pete = {
    user: "Pete",
    age: 30,
};
let mary = {
    user: "Mary",
    age: 28,
};

let users = [john, pete, mary];

let mapaANombres = (users) => users.map((item) => item.user).toString();

let names = mapaANombres(users);

console.log(names);
