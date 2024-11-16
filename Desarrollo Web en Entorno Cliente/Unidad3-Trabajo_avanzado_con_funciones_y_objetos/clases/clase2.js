console.log("-- Clase 2 --");

let [x, y, z = 1, t = 2, v] = [5, , , 10];

console.log(x);
console.log(y);
console.log(z);
console.log(t);
console.log(v);

let { a, c = 1, d, e } = { a: 5, e: 3, f: 4 };

console.log(a);
console.log(c);
console.log(d);
console.log(e);

let [k, ...rest] = [0, 2, 3];

console.log(k);
console.log(rest);

let { b, ...rest2 } = { a: 5, b: 1, c: 2 };

console.log(b);
console.log(rest2);

function pintarVentana({ alto, ancho, ...opciones }) {
    console.log(`${alto} ${ancho} ${opciones}`);
}

pintarVentana({
    alto: 300,
    ancho: 40,
    titulo: "titulo",
    contenido: "contenido",
});

let datos = [1, 2, 3, 4, 5, 6];

console.log(Math.min(...datos));

function suma(...valores) {
    let acu = 0;
    for (let valor of valores) {
        acu += valor;
    }
    return acu;
}

console.log(suma(1, 2, 3, 4, 5, 6));
