console.log("--- Ejercicio 25 ---");

let john = {
    name: "John",
    edad: 25,
};
let pete = {
    name: "Pete",
    edad: 30,
};
let mary = {
    name: "Mary",
    edad: 28,
};

let arr = [pete, john, mary];

ordenarPorEdad(arr);

console.log(arr[0].name);
console.log(arr[1].name);
console.log(arr[2].name);

function ordenarPorEdad(arr) {
    arr.sort((user1, user2) => user1.edad > user2.edad);
}
