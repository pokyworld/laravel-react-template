import React from "react";

import Option from "./Option";

const Options = (props) => (
        <div className="widget-body">
            <div className="widget-header">
                <h3 className="widget-header__title">Your Options</h3>
                <button 
                    className="button button--link"
                    onClick={props.handleDeleteOptions}
                    disabled={!props.options.length > 0}
                >Remove All</button>
            </div>
            {props.options && props.options.length === 0 && <p className="widget__message">Please add an option to get started</p> }
            <ul id="options">
                { props.options.map((option, index) => (
                    <Option 
                        key={option} 
                        optionText={option}
                        count={index+1}
                        handleDeleteOption={props.handleDeleteOption}
                    />
                ))}
            </ul>
        </div>
    );

export default Options;