let nameInput;
let emailInput;
let passInput;

let btn;
let result;

document.addEventListener("DOMContentLoaded", () => {
    nameInput = document.getElementById("nombre");
    emailInput = document.getElementById("email");
    passInput = document.getElementById("password");

    btn = document.getElementById("enviar");
    result = document.getElementById("resultado");

    btn.addEventListener("click", validator);
});

function validator(e) {
    const nameExp = /^([a-zA-Z]+[ ][a-zA-Z]+)+$/;
    const errName = document.getElementById("errorNombre");

    const emailExp = /^[a-zA-Z0-9]+[@][a-zA-Z0-9]+[\.][a-zA-Z0-9]+$/;
    const errEmail = document.getElementById("errorEmail");

    const passExp = /^.{8,}$/;
    const errPass = document.getElementById("errorPassword");

    errName.textContent = nameExp.test(nameInput.value)
        ? ""
        : "El nombre no debe estar vacío y debe contener al menos un espacio";
    errEmail.textContent = emailExp.test(emailInput.value)
        ? ""
        : "El correo debe tener tres partes compuestas por letras y dígitos y separadas por @ y .";
    errPass.textContent = passExp.test(passInput.value)
        ? ""
        : "La contraseña debe tener al menos 8 carácteres";

    if (
        errName.textContent == "" &&
        errEmail.textContent == "" &&
        errPass.textContent == ""
    ) {
        send();
    }

    e.preventDefault();
}

async function send() {
    try {
        let url = new URL("./usuario.php", window.location);
        let data = {
            nombre: nameInput.value,
            email: emailInput.value,
            password: passInput.value,
        };

        let response = await fetch(url.href, {
            method: "POST",
            body: JSON.stringify(data),
            headers: {
                "Content-type": "application/x-www-form-urlencoded",
            },
        });

        if (!response.ok) {
            throw new Error("ERROR: El servidor no responde");
        }

        let message = await response.json();

        result.textContent =
            message.ok == "SI" ? message.messageOk : message.messageError;
    } catch (error) {
        console.error(`❗${error}`);
    }
}
