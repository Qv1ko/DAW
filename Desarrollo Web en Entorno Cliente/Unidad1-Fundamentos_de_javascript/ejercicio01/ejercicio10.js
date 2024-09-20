console.log("--- Ejercicio 10 ---");

function prime(number) {
    let text = "";

    if (number > 1) {
        for (let i = 2; i < number; i++) {
            if (number % i == 0) {
                text += i + ", ";
            }
        }
    }

    console.log(text.replace(/, $/, "."));
}
