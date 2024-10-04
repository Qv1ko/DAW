console.log("--- Ejercicio 17 ---");

let styles = ["Jazz", "Blues"];
console.log(styles);

styles.push("Rock-n-Roll");
console.log(styles);

styles.splice(Math.floor(styles.length / 2), 1, "Classics");
console.log(styles);

styles.shift();
console.log(styles);

styles.unshift("Rap", "Reggae");
console.log(styles);
