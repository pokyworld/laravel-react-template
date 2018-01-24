import React from "react";

const ProductListItem = (props) => (
    <li data-id={props.product.id} onClick={(e) => {props.handleClick(props.product)} } 
        key={ props.product.id } 
        className="list-group-item"> 

        { props.product.title } 
    </li>
);

export default ProductListItem;