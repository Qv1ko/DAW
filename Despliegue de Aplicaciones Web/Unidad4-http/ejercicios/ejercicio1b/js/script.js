document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("img").forEach((img) => {
        img.addEventListener("click", () => {
            alert(`Imagen seleccionada: ${img.alt}`);
        });
    });
});
