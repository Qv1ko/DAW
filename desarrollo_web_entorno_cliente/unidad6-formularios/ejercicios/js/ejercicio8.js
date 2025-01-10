console.log("--- Ejercicio 8 ---");

/*
 * Cuestiones sobre expresiones regulares:
 */

console.log("Cuestión 1:");
// Tenemos la expresión regular /Java[^script]/.
// - ¿Coincide con algo en la cadena Java?
console.log(`"Java" = ${/Java[^script]/.test("Java")}`);
/*
 * No coincide porque no tiene un carácter diferente a los que están entre corchetes, después de la
 *  cadena "Java".
 */
// - ¿Y en la cadena JavaScript?
console.log(`"JavaScript" = ${/Java[^script]/.test("JavaScript")}`);
/*
 * Coincide porque después de la cadena "Java" hay un carácter que no estar entre los corchetes.
 */

console.log("Cuestión 2:");
/*
 * Escribe una expresión regular para validar que una cadena contiene una hora. La hora puede estar
 *  en formato horas:minutos u horas-minutos. Tanto las horas como los minutos tienen dos dígitos.
 * - No es necesario validar si la hora y los minutos son correctos (es decir, si la hora está
 *    entre 00 y 23, o los minutos entre 00 y 59).
 */
console.log(`"09:00" = ${/^[0-2][0-9][:-][0-5][0-9]$/.test("09:00")}`);
console.log(`"9:00" = ${/^[0-2][0-9][:-][0-5][0-9]$/.test("9:00")}`);
console.log(`"21-30" = ${/^[0-2][0-9][:-][0-5][0-9]$/.test("21-30")}`);

console.log("Cuestión 3:");
/*
 * Escribe una expresión regular para validar una cadena en la que tiene que haber tres puntos contiguos.
 */
console.log(`"Uno, dos, tres..." = ${/\.\.\./.test("Uno, dos, tres...")}`);
console.log(`"1. 2. 3." = ${/\.\.\./.test("1. 2. 3.")}`);
console.log(`"1, 2, 3... 4, 5" = ${/\.\.\./.test("1, 2, 3... 4, 5")}`);

console.log("Cuestión 4:");
/*
 * Escribe una expresión regular para validar colores HTML escritos como #ABCDEF: primero # y
 *  luego 6 caracteres hexadecimales (en mayúsculas o minúsculas).
 */
console.log(`"#ABCDEF" = ${/^#[0-9a-fA-F]{6}$/.test("#ABCDEF")}`);
console.log(`"#ff0000" = ${/^#[0-9a-fA-F]{6}$/.test("#ff0000")}`);
console.log(`"#AB00GR" = ${/^#[0-9a-fA-F]{6}$/.test("#AB00GR")}`);
console.log(`"ABCDEF" = ${/^#[0-9a-fA-F]{6}$/.test("ABCDEF")}`);

console.log("Cuestión 5:");
/*
 * Escribe una expresión regular que verifique si una cadena es una dirección MAC.
 * La dirección MAC de una interfaz de red consiste en 6 números hexadecimales de dos dígitos
 *  separados por dos puntos (se admiten mayúsculas y minúsculas).
 */
console.log(
    `"01:32:54:67:89:Ab" = ${/^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}$/.test(
        "01:32:54:67:89:Ab"
    )}`
);
console.log(
    `"64:32:54:67" = ${/^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}$/.test(
        "64:32:54:67"
    )}`
);
console.log(
    `"01:32:R3:67:89:AB" = ${/^([0-9a-fA-F]{2}:){5}[0-9a-fA-F]{2}$/.test(
        "01:32:R3:67:89:AB"
    )}`
);

console.log("Cuestión 6:");
/*
 * Escribe una expresión regular para validar colores hexadecimales escritos como #abc o #abcdef.
 *  Es decir, # seguido por 3 o 6 dígitos hexadecimales.
 */
console.log(`"#3f3" = ${/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/.test("#3f3")}`);
console.log(`"#3f3d" = ${/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/.test("#3f3d")}`);
console.log(
    `"#AA00ef" = ${/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/.test("#AA00ef")}`
);
console.log(`"#abcd" = ${/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/.test("#abcd")}`);
console.log(`"#ytc" = ${/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/.test("#ytc")}`);

console.log(`"#3f3" = ${/^#[0-9a-fA-F]{3}([0-9a-fA-F]{3})?$/.test("#3f3")}`);
console.log(`"#3f3d" = ${/^#[0-9a-fA-F]{3}([0-9a-fA-F]{3})?$/.test("#3f3d")}`);
console.log(
    `"#AA00ef" = ${/^#[0-9a-fA-F]{3}([0-9a-fA-F]{3})?$/.test("#AA00ef")}`
);

console.log("Cuestión 7:");
/*
 * Escribe una expresión regular que valide si una cadena es una de las siguientes palabras: Java,
 *  JavaScript, PHP, C, C++ (en mayúsculas o minúsculas).
 */
console.log(`"C" = ${/^(Java|JavaScript|PHP|C|C\+\+)$/gi.test("C")}`);
console.log(`"c++" = ${/^(Java|JavaScript|PHP|C|C\+\+)$/gi.test("c++")}`);
console.log(`"Python" = ${/^(Java|JavaScript|PHP|C|C\+\+)$/gi.test("Python")}`);
console.log(
    `"Javascript" = ${/^(Java|JavaScript|PHP|C|C\+\+)$/gi.test("Javascript")}`
);
