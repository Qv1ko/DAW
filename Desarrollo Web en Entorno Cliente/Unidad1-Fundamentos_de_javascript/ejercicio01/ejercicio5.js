console.log("--- Ejercicio 5 ---");

let hour, min;

hour = 9;

for (min = 0; hour <= 22; min += 5) {
    console.log(hour + ":" + (min < 10 ? "0" + min : min));
    if (min == 55) {
        hour++;
        min = -5;
    }
}
