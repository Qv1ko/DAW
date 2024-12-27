let opcion, operacion;
let num1, num2;
let salir = false;

// Funciones de operación
const suma = (number1, number2) => number1 + number2;
const resta = (number1, number2) => number1 - number2;
const multiplicacion = (number1, number2) => number1 * number2;
const division = (number1, number2) => number1 / number2;

// Bucle del programa
while (!salir) {
    opcion = prompt(
        "Selecciona una opción:\nSumar -> +\nRestar -> -\nMultiplicar -> *\nDividir -> /\nSalir -> x"
    );

    switch (opcion) {
        // Caso de suma
        case "+":
            operadores("suma");
            alert(
                num1 + " + " + num2 + " = " + suma(Number(num1), Number(num2))
            );
            break;

        // Caso de resta
        case "-":
            operadores("resta");
            alert(
                num1 + " - " + num2 + " = " + resta(Number(num1), Number(num2))
            );
            break;

        // Caso de multiplicación
        case "*":
            operadores("multiplicación");
            alert(
                num1 +
                    " * " +
                    num2 +
                    " = " +
                    multiplicacion(Number(num1), Number(num2))
            );
            break;

        // Caso de división
        case "/":
            operadores("división");
            alert(
                num1 +
                    " / " +
                    num2 +
                    " = " +
                    division(Number(num1), Number(num2))
            );
            break;

        // Caso de salida
        case "x":
            salir = true;
            break;

        // Caso de selección no valida
        default:
            alert("La opción seleccionada no es valida");
            break;
    }
}

// Función para pedir los números de la operación
function operadores(operacion) {
    // Bucle para obtener el número 1
    do {
        num1 = prompt(
            "Escriba el valor del primer operador de la " + operacion
        );
    } while (num1 == "" || num1 == null || isNaN(num1));

    // Bucle para obtener el número 2
    do {
        num2 = prompt(
            "Escriba el valor del segundo operador de la " + operacion
        );
    } while (num2 == "" || num2 == null || isNaN(num2));
}
