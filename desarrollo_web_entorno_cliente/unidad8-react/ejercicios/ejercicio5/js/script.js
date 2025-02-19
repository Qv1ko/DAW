import React from "https://esm.sh/react@19.0.0-beta-04b058868c-20240508/?dev";
import ReactDOMClient from "https://esm.sh/react-dom@19.0.0-beta-04b058868c-20240508/client/?dev";

console.log("--- Ejercicio 5 ---");

window.onload = () => {
    const rootElement = ReactDOMClient.createRoot(
        document.getElementById("root")
    );

    const data = {
        Mercedes: {
            piloto1: "Lewis Hamilton",
            piloto2: "George Russell",
            nacionalidad: "Alemania",
        },
        "Red Bull Racing": {
            piloto1: "Max Verstappen",
            piloto2: "Sergio Pérez",
            nacionalidad: "Austria",
        },
        Ferrari: {
            piloto1: "Charles Leclerc",
            piloto2: "Carlos Sainz",
            nacionalidad: "Italia",
        },
        McLaren: {
            piloto1: "Lando Norris",
            piloto2: "Oscar Piastri",
            nacionalidad: "Reino Unido",
        },
        Alpine: {
            piloto1: "Esteban Ocon",
            piloto2: "Pierre Gasly",
            nacionalidad: "Francia",
        },
        "Alfa Romeo": {
            piloto1: "Valtteri Bottas",
            piloto2: "Zhou Guanyu",
            nacionalidad: "Suiza",
        },
        "Aston Martin": {
            piloto1: "Fernando Alonso",
            piloto2: "Lance Stroll",
            nacionalidad: "Reino Unido",
        },
        Haas: {
            piloto1: "Kevin Magnussen",
            piloto2: "Nico Hülkenberg",
            nacionalidad: "Estados Unidos",
        },
        Williams: {
            piloto1: "Alexander Albon",
            piloto2: "Logan Sargeant",
            nacionalidad: "Reino Unido",
        },
    };

    const th1 = React.createElement("th", null, "Escuderia");
    const th2 = React.createElement("th", null, "Pilotos");
    const th3 = React.createElement("th", null, "Nacionalidad");
    const thRow = React.createElement("tr", null, [th1, th2, th3]);
    const thead = React.createElement("thead", null, thRow);

    const tbRows = Object.keys(data).map((team) => {
        let elements = [];

        elements.push(React.createElement("td", null, team));
        elements.push(
            React.createElement(
                "td",
                null,
                data[team].piloto1 + " y " + data[team].piloto2
            )
        );
        elements.push(React.createElement("td", null, data[team].nacionalidad));

        return React.createElement("tr", null, elements);
    });
    const tbody = React.createElement("tbody", null, tbRows);

    const table = React.createElement("table", { id: "table" }, [thead, tbody]);

    rootElement.render(table);
};
