console.log("--- Ejercicio 16 ---");

let user = {
    name: "John",
    years: 30,
};

let { name, years: age, isAdmin = false } = user;

alert(name);
alert(age);
alert(isAdmin);
