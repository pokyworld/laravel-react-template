import React, { Component } from 'react';

import ProductListItem from "./ProductListItem";

const ProductList = (props) => (
    <div className="col-md-4 col-sm-5">
        <h3>All Products</h3>
        <ul className="list-group">
        { props.products.map((product, index) => (
            <ProductListItem 
                key={product.id} 
                product={product}
                handleClick={props.handleProductListClick}
            />
        ))}
        </ul>
    </div> 
);

export default ProductList;
