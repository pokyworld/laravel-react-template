import React, { Component } from 'react';
 
/* Stateless component or pure component
 * { product } syntax is the object destructing
 */
const Product = (props) => {
    
  const divStyle = {  
      //
  }
 
  //if the props product is null, return Product doesn't exist
  if(!props.product) {
    return(<div style={ divStyle } className="col-md-8 col-sm-7"><h3>No Product Selected</h3></div>);
  }
     
  //Else, display the product data
  return(  
    <div style={ divStyle } className="col-md-8 col-sm-7"> 
      <h3>Product : { props.product.title } </h3>
      <p> { props.product.description } </p>
      <h3> Status : { props.product.availability == 1 ? 'Available' : 'Out of stock'} </h3>
      <h3> Price : { props.product.price } </h3>
      <button className="btn btn-danger" onClick={props.handleDeleteProduct}>Delete</button>
      
    </div>
  )
}
 
export default Product ;