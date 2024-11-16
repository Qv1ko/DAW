console.log("--- Ejercicio 15 ---");

/*
 * Crea un script que te pida el día y mes de tu cumpleaños (pero que
 *  no te pida el año) y calcule el número de milisegundos y días que
 *  faltan hasta esa fecha.
 * Además, que saque todos los años en que tu cumpleaños va a caer en
 *  domingo, desde el próximo cumpleaños hasta el 2100.
 */

let proximoCumple = new Date(
    new Date().getFullYear(),
    perdirCumple("mes") - 1,
    perdirCumple("día")
);

if (proximoCumple.getTime() - new Date().getTime() < 0) {
    proximoCumple.setFullYear(proximoCumple.getFullYear() + 1);
}

cuantoQueda(proximoCumple, new Date());

console.log("Años en los que tu cumple cae domingo:");
for (let i = proximoCumple.getFullYear(); i < 2100; i++) {
    if (
        new Date(
            i,
            proximoCumple.getMonth(),
            proximoCumple.getDate()
        ).getDay() == 0
    ) {
        console.log(i);
    }
}

function perdirCumple(dato) {
    do {
        fecha = prompt("Escribe el " + dato + " de tu cumpleaños");
        if (
            fecha != null &&
            fecha != "" &&
            (dato == "mes" ? fecha < 12 && fecha > 0 : fecha < 31 && fecha > 0)
        ) {
            break;
        }
    } while (true);
    return fecha;
}

function cuantoQueda(proximoDia, fecha) {
    console.log(
        "Quedan " +
            (proximoDia.getTime() - fecha.getTime()) +
            " milisegundos para el día de tu cumpleaños"
    );
    console.log(
        "Quedan " +
            parseInt(
                (proximoDia.getTime() - fecha.getTime()) / (24 * 60 * 60 * 1000)
            ) +
            " días para el día de tu cumpleaños"
    );
}
