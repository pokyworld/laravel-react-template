import React from "react";

import AddOption from "./AddOption";
import Options from "./Options";
import Action from "./Action";
import Header from "./Header";
import OptionModal from "./OptionModal";

class IndecisionApp extends React.Component {
    state = {
        options: this.props.options,
        selectedOption: undefined
    };

    handleDeleteOptions = () => {
        this.setState(() => ({ options: [] }));
    };

    handleDeleteOption = (optionToRemove) => {
        this.setState((prevState) => ({
            options: prevState.options.filter((option) => optionToRemove !== option)
        }));
    };

    handlePick = () => {
        const randomNum = Math.floor(Math.random() * this.state.options.length);
        const option = this.state.options[randomNum];
        this.setState(() => ({ selectedOption: option }));
    };

    handleClearSelectedOption = () => {
        this.setState(() => ({ selectedOption: undefined }));
    };

    handleAddOption = (option) => {
        //console.log(option);
        if(!option.trim()){
            return "Enter valid value as option";
        } else if (this.state.options.indexOf(option) > -1){
            return "This option already exists";
        }

        this.setState((prevState) => ({ options: prevState.options.concat(option) }));
    };

    componentDidMount() {
        try {
            let options = [];
            if(!localStorage.options){
                options = this.props.options;
            } else {
                const json = localStorage.options || "[]"
                options = JSON.parse(json);                
            }
            //console.log("Fetching Data : ", options);
            if(options) {
                this.setState(() => ({ options }));
            };
        } catch(e) {
            // Do nothing
        }
    }

    componentDidUpdate(prevProps, prevState) {
        if(prevState.options.length !== this.state.options.length) {
            const json = JSON.stringify(this.state.options);
            localStorage.options = json;
            //console.log("Saving Data : ", localStorage.options);
        }
    }

    componentWillUnmount() {
        //console.log("componentWillUnmount!");
        // ReactDOM.render(React.createElement("p"), document.getElementById("app"));
    }

    render() {
        const app = {
            title: "Indecision",
            subtitle: "Put your life in the hands of a computer"
        }        
        return (
            <div>
                <Header subtitle={app.subtitle} />
                <div className="container container__body">
                    <Action 
                        hasOptions={this.state.options.length > 0} 
                        handlePick={this.handlePick}
                    />
                    <div className="widget">
                        <Options 
                            options={this.state.options} 
                            handleDeleteOptions={this.handleDeleteOptions} 
                            handleDeleteOption={this.handleDeleteOption} 
                        />
                        <AddOption 
                            handleAddOption={this.handleAddOption} 
                        />
                    </div>
                </div>
                <OptionModal 
                    selectedOption={this.state.selectedOption}
                    handleClearSelectedOption={this.handleClearSelectedOption}
                />
            </div>
        )
    }
}

IndecisionApp.defaultProps = {
    options: ["one", "two", "three"]
}

export default IndecisionApp;