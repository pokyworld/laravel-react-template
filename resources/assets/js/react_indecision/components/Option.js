import React from "react";

const Option = (props) => (
        <li className="option">
            <span className="option__text">{props.count}.&nbsp;{props.optionText}</span>            
            <button 
                //onClick={props.handleDeleteOption}
                className="button button--link"
                onClick={(e) => { props.handleDeleteOption(props.optionText) }}
            >Remove</button>
        </li>
    );

export default Option;