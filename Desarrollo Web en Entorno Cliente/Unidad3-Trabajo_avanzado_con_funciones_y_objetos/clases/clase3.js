console.log("-- Clase 3 --");

let dia = new Date();

dia = new Date(2024, 9, 21);

console.log(dia.getMonth());
console.log(dia.getFullYear());
console.log(dia.getDate());
console.log(dia.getHours());
console.log(dia.getHours());
console.log(dia.getMinutes());
console.log(dia.getSeconds());
console.log(dia.getMilliseconds());
console.log(dia.getDay());

dia.setMonth(10);
dia.setFullYear(2025);
dia.setDate(22);
dia.setHours(8);
dia.setMinutes(30);
dia.setSeconds(5);
dia.setMilliseconds(299);

let ultimoDia = new Date(2024, 9, 31);
ultimoDia.setMonth(10);
console.log(ultimoDia);

let hoy = new Date();
let unoNov = new Date(2024, 10, 1);

console.log(
    parseInt((unoNov.getTime() - hoy.getTime()) / (1000 * 60 * 60 * 24))
);

console.log(hoy.toString());

let fecha = new Date(2024, 12, 31);

console.log(fecha);

let h = new Date();
console.log(h.getDay());

h.setTime(0);
console.log(h);

h = new Date(0);
console.log(h.getDay());

diaUno(2010);

ultimoDiaDelMes(2024);

function diaUno(ano) {
    let dia = new Date(ano, 0, 1);
    const MES = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Julio",
        "Junio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
    ];
    const DIAS = [
        "Domingo",
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sabado",
    ];

    for (let i = 0; i < 12; i++) {
        dia.setMonth(i);
        console.log(MES[dia.getMonth()] + ": " + DIAS[dia.getDay()]);
    }
}

function ultimoDiaDelMes(ano) {
    let fecha = new Date(ano, 1, 0);
    const MES = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Julio",
        "Junio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
    ];
    for (let i = 0; i < 12; i++) {
        fecha.setMonth(i);
        fecha.setDate(0);
        console.log(MES[i] + ": " + fecha.getDate());
    }
}
