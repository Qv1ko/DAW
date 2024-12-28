console.log("--- Ejercicio 25 ---");

/*
 * Escribe la función ordenarPorEdad(users) que recibe como parámetro un array de objetos con la
 *  propiedad edad y los ordena según edad.
 */

john = {
    name: "John",
    edad: 25,
};
pete = {
    name: "Pete",
    edad: 30,
};
mary = {
    name: "Mary",
    edad: 28,
};

arr = [pete, john, mary];

ordenarPorEdad(arr);

console.log(arr[0].name);
console.log(arr[1].name);
console.log(arr[2].name);

function ordenarPorEdad(arr) {
    arr.sort((user1, user2) => user1.edad > user2.edad);
}
