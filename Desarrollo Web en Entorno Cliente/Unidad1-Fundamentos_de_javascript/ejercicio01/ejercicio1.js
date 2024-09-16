console.log("--- Ejercicio 1 ---");

let age = prompt("Introduce una edad");

if (isNaN(age) || age == null) {
    alert("ERROR: La edad tiene un valor incorrecto");
} else {
    if (age > 0 && age < 13) {
        alert("Niño");
    } else if (age >= 13 && age < 26) {
        alert("Joven");
    } else if (age >= 26 && age < 60) {
        alert("Adulto");
    } else {
        alert("Jubilado");
    }
}
