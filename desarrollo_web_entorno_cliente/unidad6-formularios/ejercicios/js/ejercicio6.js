console.log("--- Ejercicio 6 ---");

/*
 * Breaking Bad. Walter White y Jesse Pinkman tienen que controlar las bolsas de producto azul que
 *  cocinan para distribuir en Alburquerque. Para ello tienen que crear un formulario que almacene
 *  la información de cada bolsa y validarlo teniendo en cuenta lo siguiente:
 * - Fecha de creación: obligatorio, fecha válida y con formato dd/mm/aaaa.
 * - Cocinero: será un nombre en clave formado por dos letras en mayúscula, un símbolo y cuatro
 *    dígitos (ej. WW$1234)
 * - Destinatario: estará formado por dos o tres letras mayúsculas correspondientes al estado, un
 *    guion bajo, el nombre de la ciudad en minúsculas, dos puntos, y el código de distrito
 *    de 4 digitos (ej. NM_alburquerque:1234).
 * - Gramos: será un número del 100 al 5000.
 * - Número de cuenta de EEUU: supongamos que un número de cuenta estadounidense tiene el siguiente
 *    formato (AB12-123456789012-1234):
 *   - Dos letras
 *   - Dos dígitos
 *   - Un guion.
 *   - Doce dígitos de cuenta.
 *   - Un guion.
 *   - Cuatro dígitos de control
 * - Si el número de cuenta es correcto, se colocará en un campo de texto al lado del anterior, pero
 *    sin guiones: solamente los números y las letras.
 */

const FORM = document.forms["bagsController"];

const DATE = FORM.elements["fecha_creacion"];
const REGEX_DATE = /^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/(\d{4})$/;

const COOK = FORM.elements["cocinero"];
const REGEX_COOK = /^[A-Z]{2}\W[0-9]{4}$/;

const RECIPIENT = FORM.elements["destinatario"];
const REGEX_RECIPIENT = /^[A-Z]{2,3}_[a-z]+:[0-9]{4}$/;

const GRAMS = FORM.elements["gramos"];
const REGEX_GRAMS = /^(5000|[1-4][0-9]{3}|[1-9][0-9]{2})$/;

const ACCOUNT = FORM.elements["numero_cuenta"];
const REGEX_ACCOUNT = /^[A-Z]{2}[0-9]{2}-[0-9]{12}-[0-9]{4}$/;
const ACCOUNT_ID = document.getElementById("account");

const BTN = document.getElementById("btn");

document.addEventListener("change", validator);
BTN.addEventListener("click", validator);

function validator(e) {
    if (FORM && e.type === "click") {
        let correct = true;
        let errors = "";

        if (DATE.value !== "") {
            if (REGEX_DATE.test(DATE.value)) {
                updateInput(DATE, true);
            } else {
                correct = false;
                updateInput(DATE, false);
                errors += "\n- Fecha de creación";
            }

            if (REGEX_COOK.test(COOK.value)) {
                updateInput(COOK, true);
            } else {
                correct = false;
                updateInput(COOK, false);
                errors += "\n- Cocinero";
            }

            if (REGEX_RECIPIENT.test(RECIPIENT.value)) {
                updateInput(RECIPIENT, true);
            } else {
                correct = false;
                updateInput(RECIPIENT, false);
                errors += "\n- Destinatario";
            }

            if (REGEX_GRAMS.test(GRAMS.value)) {
                updateInput(GRAMS, true);
            } else {
                correct = false;
                updateInput(GRAMS, false);
                errors += "\n- Gramos";
            }

            if (REGEX_ACCOUNT.test(ACCOUNT.value)) {
                updateInput(ACCOUNT, true);
                ACCOUNT_ID.textContent = ACCOUNT.value.replace(/-/g, "");
            } else {
                correct = false;
                updateInput(ACCOUNT, false);
                errors += "\n- Número de cuenta";
            }

            setTimeout(() => {
                if (correct) {
                    alert("La bolsa cumple los requisitos");
                } else {
                    alert("La bolsa no cumple los requisitos:" + errors);
                }
            }, 1);
        } else {
            DATE.placeholder = "* campo obligatorio";
            DATE.style.backgroundColor = "#ffcccc";
        }

        e.preventDefault();
    }
}

function updateInput(input, isValid) {
    input.style.backgroundColor = isValid ? "white" : "red";
    input.style.color = isValid ? "black" : "white";
}
