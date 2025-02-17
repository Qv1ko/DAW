import { apiConnection } from "./conexion.js";

const input = document.getElementById("fecha");

function loadContent() {
    input.addEventListener("change", selectDate);
}

function selectDate(e) {
    if (
        e.target.value != "" &&
        e.target.value <= new Date().toISOString().split("T")[0]
    ) {
        apiConnection(e.target.value);
    }
}

export { loadContent };
