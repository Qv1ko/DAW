import os from "node:os";
import ctable from "cli-table3";
import boxen from "boxen";

console.log("--- Ejercicio 2 ---");

console.log(
    "\nSistema operativo",
    os.platform(),
    `(${os.release()})`,
    "arquitectura",
    os.arch(),
    "\n"
);

let speedAvg = 0;
let tUser = 0;
let tNice = 0;
let tSys = 0;
let tIdle = 0;
let tIrq = 0;

os.cpus().forEach((cpu) => {
    speedAvg += cpu.speed;
    tUser += cpu.times.user;
    tNice += cpu.times.nice;
    tSys += cpu.times.sys;
    tIdle += cpu.times.idle;
    tIrq += cpu.times.irq;
});

speedAvg /= os.availableParallelism();

let table = new ctable({
    head: ["Modo user", "Modo nice", "Modo sys", "Modo idle", "Modo irq"],
});

table.push([
    (tUser / (os.availableParallelism() * 1000)).toFixed(3) + " s",
    (tNice / (os.availableParallelism() * 1000)).toFixed(3) + " s",
    (tSys / (os.availableParallelism() * 1000)).toFixed(3) + " s",
    (tIdle / (os.availableParallelism() * 1000)).toFixed(3) + " s",
    (tIrq / (os.availableParallelism() * 1000)).toFixed(3) + " s",
]);

console.log(
    boxen(
        "Velocidad: " +
            speedAvg +
            " MHz\n\nTiempo dedicado por modo:\n" +
            table.toString(),
        {
            title: "Procesos de la CPU: " + os.cpus()[0].model,
            titleAlignment: "center",
            margin: 1,
            padding: 1,
        }
    )
);

console.log(
    boxen(
        (os.freemem() / 1000000000).toFixed(2) +
            "/" +
            (os.totalmem() / 1000000000).toFixed(2) +
            " GB",
        {
            title: "Memoria disponible",
            titleAlignment: "center",
            margin: 1,
            padding: 1,
        }
    )
);

let boxes = [];

Object.keys(os.networkInterfaces()).forEach((net) => {
    let addressv4 = "";
    let addressv6 = "";
    let netmaskv4 = "";
    let netmaskv6 = "";
    let mac = "";
    let access = "";

    let networkTable = new ctable({
        head: [
            "Dirección IPv4",
            "Dirección IPv6",
            "Mascara de red IPv4",
            "Mascara de red IPv6",
            "Dirección MAC",
            "Acceso",
        ],
    });

    os.networkInterfaces()[net].forEach((inter) => {
        if (inter.family == "IPv4") {
            addressv4 = inter.address;
            netmaskv4 = inter.netmask;
        } else {
            addressv6 = inter.address;
            netmaskv6 = inter.netmask;
        }

        mac = inter.mac;
        access = inter.internal
            ? "No accesible remotamente"
            : "Accesible remotamente";
    });

    networkTable.push([
        addressv4,
        addressv6,
        netmaskv4,
        netmaskv6,
        mac,
        access,
    ]);

    boxes.push(
        boxen(networkTable.toString(), {
            title: net,
            margin: 1,
        })
    );
});

console.log(
    boxen(boxes.join(""), {
        title: "Interfaces de red",
        titleAlignment: "center",
        margin: 1,
        padding: 1,
    })
);
