let v = prompt("Escribe un número:");
let i = prompt("Escribe un número:");

// Guarda el valor del prompt como Number por forzalo con el +
//v = +prompt("Escribe un número:");
//i = +prompt("Escribe un número:");

/*
Concatenación de las variables
alert(v + " + " + i + " = " + (v + i))
*/

alert("Suma de " + v + " + " + i + " = " + (parseInt(v) + parseInt(i)));

const PI = 3.14;

//alert(`Suma de ${v} + ${i} = ${parseInt(v) + parseInt(i)}`);

alert("Suma de " + v + " + " + i + " = " + (Number(v) + Number(i)));

alert(confirm("test"));
alert(+confirm("test"));

let n1 = 1,
  n2 = "test";

console.log(n1);
console.log(n2);

for (let i = 0, j = 100; i <= 3; i++, j--) {
  console.log(`i = ${i}; j = ${j}`);
}
