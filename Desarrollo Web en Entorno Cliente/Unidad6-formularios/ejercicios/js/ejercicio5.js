console.log("--- Ejercicio 5 ---");

/*
 * Vas a crear un pequeño test sobre un tema.
 * La página tendrá, al menos:
 * - 5 preguntas con 3 respuestas cada una a elegir con botones de radio.
 * - un botón para comprobar las respuestas
 * - un campo donde se mostrará el resultado
 * El test deberá hacer lo siguiente:
 * - Cuando el usuario conteste las 5 preguntas obtendrá el resultado final en un cuadro de texto.
 * - Además, el usuario podrá ver qué preguntas ha fallado, porque al enviar el formulario le
 *    aparecerá un pequeño icono con un tic verde en las preguntas correctas y una cruz roja en las
 *    preguntas incorrectas.
 * - En caso de que el usuario deje alguna pregunta sin contestar, no mostrará el resultado e
 *    indicará con un mensaje "No has respondido a todas las preguntas". Y se marcará en color rojo
 *    la pregunta que no haya sido respondida.
 * - El usuario puede salir de la página y continuar en otro momento.
 */

document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("userAnswers")) {
        JSON.parse(localStorage.getItem("userAnswers")).forEach((answer) => {
            document.getElementById(answer).checked = true;
        });
        correction();
    }
});

const FORM = document.forms["test"];
const BTN = document.getElementById("submit-button");
const MESSAGE = document.getElementById("result");

const CORRECTS = ["q1a", "q2b", "q3b", "q4b", "q5b"];

BTN.addEventListener("click", correction);

function correction(e) {
    let answers = document.querySelectorAll("form input:checked");
    localStorage.setItem(
        "userAnswers",
        JSON.stringify(Array.from(answers).map((answer) => answer.id))
    );
    if (answeredTest()) {
        let correct = 0;
        for (let i = 0; i < CORRECTS.length; i++) {
            let icons = document.getElementsByClassName("icon");
            if (CORRECTS[i] === answers[i].id) {
                correct++;
                icons[i].textContent = "✅";
            } else {
                icons[i].textContent = "❌";
            }
        }
        MESSAGE.textContent =
            "Has acertado " + correct + " de " + CORRECTS.length;
        MESSAGE.style.color = "black";
    }
    localStorage.setItem("message", MESSAGE.textContent);
    e.preventDefault();
}

function answeredTest() {
    const QUESTIONS = document.querySelectorAll("form h4");
    let reply = true;
    QUESTIONS.forEach((REQUEST) => {
        let answered = false;
        let inputs = document.querySelectorAll(
            "form input[name=" + REQUEST.id + "]"
        );
        for (const INPUT of inputs) {
            if (INPUT.checked) {
                answered = true;
                break;
            }
        }
        if (!answered) {
            MESSAGE.textContent = "No has respondido a todas las preguntas";
            MESSAGE.style.color = "red";
            reply = false;
        }
        REQUEST.setAttribute(
            "style",
            "color: " + (answered ? "black" : "red") + ";"
        );
    });
    return reply;
}
