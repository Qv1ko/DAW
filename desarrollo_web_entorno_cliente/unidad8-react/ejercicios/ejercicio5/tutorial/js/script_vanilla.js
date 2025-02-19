console.log("--- Tutorial - Vanila ---");

// recuperar todos los botones
const buttons = document.querySelectorAll("button");

buttons.forEach((button) => {
    // Al hacer clic en el boton hay que ejecutar una función
    button.addEventListener("click", function () {
        // Recuperar el id del atributo del HTML
        const id = button.getAttribute("data-id");

        // Llamar a un servicio para actualizar si me gusta
        // toggleLike(id)

        if (button.classList.contains("liked")) {
            button.classList.remove("liked");
            button.innerText = "Me gusta";
        } else {
            button.classList.add("liked");
            button.innerText = "No me gusta";
        }
    });
});
