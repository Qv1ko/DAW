let arr = ["Yo", "estoy", "estudiando", "JavaScript"];

console.log(arr);

arr.pop();

console.log(arr);

arr.push("DAW");

console.log(arr);

arr.shift();

console.log(arr);

arr.unshift("Ahora");

console.log(arr);

subArr = arr.splice(0);

console.log(arr);
console.log(subArr);

arr.splice(0, 0, "A", "B", "C", "D");

console.log(arr);

arr.splice(2, 2, "E", "F");

console.log(arr);

newArr = ["i1", "i2"];

arr.push(...newArr, newArr);

console.log(arr);

concatArr = arr.concat("concat");

console.log(arr);
console.log(concatArr);

console.log(arr.includes("A"));
console.log(arr.includes("JavaScript"));

console.log(Array.isArray(arr));
