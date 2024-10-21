console.log("--- Ejercicio 8 ---");

let date = new Date(2012, 0, 3);
alert(getWeekDay(date));

function getWeekDay(date) {
    const DW = ["SU", "MO", "TU", "WE", "TH", "FR", "SA"];
    return DW[date.getDay()];
}
