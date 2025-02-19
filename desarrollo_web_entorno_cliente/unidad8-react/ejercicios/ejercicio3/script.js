import os from "node:os";
import { writeFile, appendFile, readFile } from "node:fs/promises";

console.log("--- Ejercicio 3 ---");

console.log("Información del sistema:");

console.log("- Nombre del sistema operativo:", os.hostname());
console.log("- Versión del sistema operativo:", os.version());
console.log("- Cantidad de memoria disponible:", os.freemem(), "bytes");
console.log("- Número de CPUs disponibles:", os.cpus().length);

console.log("Manejo de archivo con fs:");

const path = "./info_sistema.txt";

async function createEditFile() {
    try {
        await writeFile(path, "");
        console.log(" ✅ Archivo creado");

        await appendFile(
            path,
            "Nombre del sistema operativo: " +
                os.hostname() +
                "\nVersión del sistema operativo: " +
                os.version() +
                "\nCantidad de memoria disponible: " +
                (os.freemem() / 1e6).toFixed(2) +
                " MB\nNúmero de CPUs disponibles: " +
                os.cpus().length,
            { flag: "w" }
        );
        console.log(" ✅ Archivo editado");

        readViewFile();
    } catch (err) {
        console.error(" ⚠️ Error al crear el archivo:", err.message);
    }
}

async function readViewFile() {
    try {
        const data = await readFile(path);
        console.log(" ✅ Archivo abierto");

        console.log(`Contenido del archivo "${path}":\n\`\`\``);
        console.log(data.toString());
        console.log("\n```");
    } catch (err) {
        console.error(" ⚠️ Error al leer el archivo:", err.message);
    }
}

createEditFile();
