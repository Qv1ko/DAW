console.log("--- Ejercicio 4 ---");

let menu = {
    width: 200,
    height: 300,
    title: "Mi menú",
};

function multiplyNumeric(obj) {
    for (value in obj) {
        if (typeof obj[value] === "number") {
            obj[value] *= 2;
        }
    }
}

console.log(menu);

multiplyNumeric(menu);

console.log(menu);
