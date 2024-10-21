console.log("--- Ejercicio 11 ---");

console.log(getLastDayOfMonth(2012, 1));

function getLastDayOfMonth(year, month) {
    let dia = new Date(year, month + 1, 0);
    return dia.getDate();
}
