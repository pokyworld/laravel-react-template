import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import ProductList from "./ProductList";
import AddProduct from "./AddProduct";
import Product from "./Product";

/* Main Component */
class Main extends Component {

    constructor() {
        super();
        this.state = {
            products: [],
            currentProduct: null
        }
        this.handleProductListClick = this.handleProductListClick.bind(this);
        this.handleAddProduct = this.handleAddProduct.bind(this);
        this.handleUpdateProduct = this.handleUpdateProduct.bind(this);
        this.handleDeleteProduct = this.handleDeleteProduct.bind(this);
    }
    
    /*componentDidMount() is a lifecycle method
     * that gets called after the component is rendered
     */
    componentDidMount() {
        /* fetch API in action */
        fetch('/api/products')
            .then(response => {
                return response.json();
            })
            .then(products => {
                //Fetched product is stored in the state
                this.setState({
                    products: products
                });
            });
    }

    handleProductListClick(product) {
        this.setState({
            currentProduct: product
        });
    };

    handleAddProduct(product) {
        product.price = Number(product.price);

        /*Fetch API for post request */
        fetch( '/api/product', {
            method: 'post',
            /* headers are important*/
            headers: {
              Accept: 'application/json',
              'Content-Type': 'application/json'
            },
             
            body: JSON.stringify(product)
        })
        .then(response => {
            console.log(response.body);
            return response.json();
        })
        .then( data => {
            console.log(data);
            // update the state of products and currentProduct
            this.setState((prevState)=> ({
                products: prevState.products.concat(data),
                currentProduct : data
            }))
            // clear the form
        })
    }

    handleDeleteProduct() {
    
        const currentProduct = this.state.currentProduct;
        fetch( 'api/product/' + this.state.currentProduct.id, 
            { method: 'delete' })
            .then(response => {
              /* Duplicate the array and filter out the item to be deleted */
              var array = this.state.products.filter(function(item) {
              return item !== currentProduct
            });
          
            this.setState({ products: array, currentProduct: null});
       
        });
    }
      
    handleUpdateProduct(product) {
 
        const currentProduct = this.state.currentProduct;
        fetch( 'api/product/' + currentProduct.id, {
            method:'put',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(product)
        })
        .then(response => {
            return response.json();
        })
        .then( data => {
            /* Updating the state */
            var array = this.state.products.filter(function(item) {
              return item !== currentProduct
          })
            this.setState((prevState)=> ({
                products: array.concat(product),
                currentProduct : product
            }))
        }) 
    }
    
    render() {
        return ( 
            <div>
                <h2>Laravel and React application</h2>
                <ProductList products={ this.state.products} handleProductListClick={this.handleProductListClick} />
                <Product product={ this.state.currentProduct } handleDeleteProduct={ this.handleDeleteProduct } />
                <div>&nbsp;</div>
                <AddProduct onAdd={this.handleAddProduct} />
            </div> 
        );
    }
}

export default Main;
