console.log("--- Ejercicio 24 ---");

let john = {
    user: "John",
    age: 25
};
let pete = {
    user: "Pete",
    age: 30
};
let mary = {
    user: "Mary",
    age: 28
};

let users = [john, pete, mary];
let names = mapaANombres(users);

console.log(names);

function mapaANombres(users) {
    return users.map(item => item.user).toString();
}
