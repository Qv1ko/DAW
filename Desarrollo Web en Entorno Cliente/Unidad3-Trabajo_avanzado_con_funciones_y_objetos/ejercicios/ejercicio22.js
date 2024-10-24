console.log("--- Ejercicio 22 ---");

let campo = document.getElementById("ejercicio22");
let id = setInterval(() => {
    let now = new Date();
    campo.value =
        now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
}, 1000);

console.log("ID intervalo ejercicio 22: " + id);
