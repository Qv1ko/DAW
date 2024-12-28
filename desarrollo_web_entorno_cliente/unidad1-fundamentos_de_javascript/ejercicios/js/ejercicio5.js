console.log("--- Ejercicio 5 ---");

/*
 * Modifica el ejercicio anterior, pero en este caso el intervalo será de 5 minutos. Los minutos se
 *  deben escribir siempre con 2 cifras.
 */

hour, min;

hour = 9;

for (min = 0; hour <= 22; min += 5) {
    console.log(hour + ":" + (min < 10 ? "0" + min : min));
    if (min == 55) {
        hour++;
        min = -5;
    }
}

console.log("--- Ejercicio 5 v2 ---");

hora = new Date();
hora.setHours(9, 0, 0);

horafin = new Date();
horafin.setHours(21, 30, 0);

while (hora <= horafin) {
    console.log(
        hora.getHours().toString().padStart(2, "0") +
            ":" +
            hora.getMinutes().toString().padStart(2, "0")
    );
    hora.setMinutes(hora.getMinutes() + 5);
}
