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
            num1 = operador("Escriba el valor del primer operador de la suma");
            num2 = operador("Escriba el valor del segundo operador de la suma");
            alert(
                num1 + " + " + num2 + " = " + suma(Number(num1), Number(num2))
            );
            break;

        // Caso de resta
        case "-":
            num1 = operador("Escriba el valor del primer operador de la resta");
            num2 = operador(
                "Escriba el valor del segundo operador de la resta"
            );
            alert(
                num1 + " - " + num2 + " = " + resta(Number(num1), Number(num2))
            );
            break;

        // Caso de multiplicación
        case "*":
            num1 = operador(
                "Escriba el valor del primer operador de la multiplicación"
            );
            num2 = operador(
                "Escriba el valor del segundo operador de la multiplicación"
            );
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
            num1 = operador(
                "Escriba el valor del primer operador de la división"
            );
            num2 = operador(
                "Escriba el valor del segundo operador de la división"
            );
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
function operador(text) {
    do {
        number = prompt(text);
    } while (number == "" || number == null || isNaN(number));
    return number;
}
