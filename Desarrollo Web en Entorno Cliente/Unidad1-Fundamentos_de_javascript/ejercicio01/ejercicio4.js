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
