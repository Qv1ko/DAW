console.log("--- Ejercicio 9 ---");

date = new Date(2012, 0, 3);

let getLocalDay = (date) => (date.getDay() == 0 ? 7 : date.getDay());

alert(getLocalDay(date)); // 2
