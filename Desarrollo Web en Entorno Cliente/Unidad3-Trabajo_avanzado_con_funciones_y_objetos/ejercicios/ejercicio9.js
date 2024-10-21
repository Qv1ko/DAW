console.log("--- Ejercicio 9 ---");

let date = new Date(2024, 9, 21);
alert(getLocalDay(date));

function getLocalDay(date) {
    return date.getDay() == 0 ? 7 : date.getDay();
}
