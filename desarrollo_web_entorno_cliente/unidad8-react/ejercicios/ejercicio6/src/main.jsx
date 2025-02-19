import React from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'

console.log("--- Ejercicio 6 ---");

const root = createRoot(document.getElementById('root'))

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

root.render(
    <table id='table'>
        <thead>
            <tr>
                <th>Escuderia</th>
                <th>Pilotos</th>
                <th>Nacionalidad</th>
            </tr>
        </thead>
        <tbody>
            {Object.keys(data).map((team) => 
                <tr>
                    <td>{team}</td>
                    <td>{data[team].piloto1} y {data[team].piloto2}</td>
                    <td>{data[team].nacionalidad}</td>
                </tr>
            )}
        </tbody>
    </table>
)
