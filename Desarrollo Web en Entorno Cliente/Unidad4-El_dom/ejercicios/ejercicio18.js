console.log("--- Ejercicio 18 ---");

/*
 * Escribe una función createCalendar(elem, year, month).
 * Cuando se llama, debe crear un calendario para el año y mes dados
 *  y ponerlo dentro de elem.
 * El calendario debe ser una tabla, donde una semana es <tr>, y un día es <td>.
 * Los encabezados de la tabla deben ser <th> con los nombres de los
 *  días de la semana: el primer día debe ser "lunes" y así hasta "domingo".
 */

function createCalendar(elem, year, month) {
    cal = document.createElement("table");
    date = new Date(year, month - 1, 1);
    days = new Date(year, date.getMonth() + 1, 0).getDate();
    daysList = ["MO", "TU", "WE", "TH", "FR", "SA", "SU"];

    for (let row = 0; row < Math.ceil(days / 7) + 1; row++) {
        tr = document.createElement("tr");

        for (let column = 0; column < 7; column++) {
            if (row == 0) {
                cell = document.createElement("th");
                cell.textContent = daysList[column];
            } else {
                cell = document.createElement("td");
                if (
                    column == (date.getDay() == 0 ? 6 : date.getDay() - 1) &&
                    date.getMonth() == month - 1
                ) {
                    cell.textContent = date.getDate();
                    date.setDate(date.getDate() + 1);
                }
            }
            tr.append(cell);
        }

        cal.append(tr);
    }

    elem.append(cal);
}

let calendar = document.getElementById("calendar");

createCalendar(calendar, 2012, 9);
