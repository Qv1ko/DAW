console.log("--- Ejercicio 4 ---");

let hour, min;

hour = 9;
min = "00";

while (hour !== 22) {
    console.log(hour + ":" + min);
    switch (min) {
        case "00":
            min = "30";
            break;

        case "30":
            min = "00";
            hour++;
            break;

        default:
            break;
    }
}

console.log("--- Ejercicio 4 v2 ---");

let hora = new Date();
hora.setHours(9, 0, 0);

let horafin = new Date();
horafin.setHours(21, 30, 0);

while (hora <= horafin) {
    console.log(
        hora.getHours().toString().padStart(2, "0") +
            ":" +
            hora.getMinutes().toString().padStart(2, "0")
    );
    hora.setMinutes(hora.getMinutes() + 30);
}
