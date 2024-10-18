console.log("--- Ejercicio 16 ---");

let user = {
    name: "John",
    years: 30,
};

let [name, age, isAdmin = false] = [user.name, user.years, user.isAdmin];

alert(name);
alert(age);
alert(isAdmin);
