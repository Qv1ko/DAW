console.log("--- Ejercicio 1 ---");

let user = new Object();

user.name = "John";
user.surname = "Smith";
console.log(user);

user.name = "Pete";
console.log(user);

delete user.name;
console.log(user);
