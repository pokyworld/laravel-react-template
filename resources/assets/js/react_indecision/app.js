import React from "react";
import ReactDOM from "react-dom";
import Modal from "react-modal";
//import "normalize.css/normalize.css";
//import "./styles/styles.scss";

import IndecisionApp from "./components/IndecisionApp";

const appRoot = document.getElementById("app");

const render = () => ReactDOM.render(<IndecisionApp options={["x", "y", "z"]} />, appRoot); 

if(window.location.pathname == "/react" && appRoot) render();

