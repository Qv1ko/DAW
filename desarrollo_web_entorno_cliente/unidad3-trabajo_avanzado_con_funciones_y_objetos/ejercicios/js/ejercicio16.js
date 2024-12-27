console.log("--- Ejercicio 16 ---");

/*
 * Escriba la asignación desestructurante que asigne las propiedades:
 * - name en la variable name.
 * - years en la variable age.
 * - isAdmin en la variable isAdmin (false, si no existe tal propiedad)
 */

user = {
    name: "John",
    years: 30,
};

let { name, years: age, isAdmin = false } = user;

alert(name);
alert(age);
alert(isAdmin);
