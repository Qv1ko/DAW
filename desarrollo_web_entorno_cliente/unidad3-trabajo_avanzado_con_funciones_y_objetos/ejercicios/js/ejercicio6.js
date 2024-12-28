console.log("--- Ejercicio 6 ---");

/*
 * Escriba una función count(obj) que devuelva el número de propiedades en el objeto.
 */

let user = {
    name: "John",
    age: 30,
};
const count = (obj) => Object.keys(obj).length;

alert(count(user));
