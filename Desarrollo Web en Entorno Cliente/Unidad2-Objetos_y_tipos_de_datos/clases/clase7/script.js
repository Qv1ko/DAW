let nums = [200, 125, 25];

// reduce(acumulado, valor, indice, array);

console.log(
    nums.reduce((acumulado, valor) => {
        acumulado = acumulado - valor;
        return acumulado;
    })
);

console.log(
    numbers.reduceRight((acumulado, valor) => {
        acumulado = acumulado - valor;
        return acumulado;
    })
);

let array = [1, 2, 3, 4, 5];

let solucion = array.reduce((total, valor) => (total *= valor));

console.log(solucion);

let numbers = [200, 125, 25];
