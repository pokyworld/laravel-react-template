import React, { Component } from "react";
import ReactDOM from "react-dom";

import Main from "./components/Main";

const appRoot = document.getElementById("app");

const render = () => ReactDOM.render(<Main />, appRoot); 

if(window.location.pathname == "/" || window.location.pathname == "/react") render();