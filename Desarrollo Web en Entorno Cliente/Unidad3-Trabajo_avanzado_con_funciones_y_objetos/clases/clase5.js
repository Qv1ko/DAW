console.log("-- Clase 5 --");

console.log(JSON.stringify("hola"));
console.log(JSON.stringify(35));
console.log(JSON.stringify(true));
console.log(JSON.stringify(null));

console.log(JSON.stringify(["hola", 3, 5, false]));

let obj = JSON.stringify({
    nombre: "Pepe",
    edad: 30,
});

let jsonObj = JSON.parse(obj);

console.log(jsonObj);

console.log(JSON.stringify(new Date()));

let obj2 = JSON.stringify({
    nombre: "Pepe",
    edad: 30,
    hoy: new Date(),
});

let jsonObj2 = JSON.parse(obj2);

jsonObj2.hoy = new Date(jsonObj2.hoy);

console.log(jsonObj2);

let obj3 = JSON.parse(JSON.stringify(obj2));

console.log(obj3);

let proceso = setInterval(() => {
    console.log("hola");
}, 1000);

// Parar el intervalo
clearInterval(proceso);
// clearTimeout(proceso);

let proceso2 = setTimeout(() => {
    console.log("hola");
}, 3000);
