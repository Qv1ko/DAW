import React from "https://esm.sh/react@18.2.0";
import ReactDOM from "https://esm.sh/react-dom@18.2.0/client";

console.log("--- Tutorial - React ---");

const appDomElement = document.getElementById("app");

const root = ReactDOM.createRoot(appDomElement);

const response = '<script>alert("Hola")</script>';

root.render(React.createElement("h1", null, response));
