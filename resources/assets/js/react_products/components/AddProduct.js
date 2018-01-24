import React, { Component } from 'react';

class AddProduct extends Component {
 
    constructor(props) {
      super(props);
         /* Initialize the state. */
         this.state = {
            newProduct: {
                id: null,
                title: '',
                description: '',
                price: 0.00,
                availability: 0
            }
          }
       
      //Boilerplate code for binding methods with `this`
      this.handleSubmit = this.handleSubmit.bind(this);
      this.handleInput = this.handleInput.bind(this);
    }
     
    /* This method dynamically accepts inputs and stores it in the state */
    handleInput(key, e) {
       
      /*Duplicating and updating the state */
      var state = Object.assign({}, this.state.newProduct); 
      state[key] = e.target.value;
      this.setState({newProduct: state });
    }
   /* This method is invoked when submit button is pressed */
    handleSubmit(e) {
        //preventDefault prevents page reload   
        e.preventDefault();
        /*A call back to the onAdd props. The current
        *state is passed as a param
        */
        this.props.onAdd(this.state.newProduct);
        this.setState((prevState)=> ({
            newProduct : {
                id: null,
                title: '',
                description: '',
                price: 0.00,
                availability: 0                
            }
        }))
    }
   
    render() {
        const divStyle = {
            
        }
            
        return(
            <div style={divStyle} className="col-md-8 col-sm-7"> 
                <h3> Add new product </h3>
                <form name="add-product" onSubmit={this.handleSubmit}>
                    <label> Title: &nbsp;&nbsp;
                    { /*On every keystroke, the handeInput method is invoked */ }
                    <input type="text" onChange={(e)=>this.handleInput('title',e)} />
                    </label>
                    &nbsp;&nbsp;
                    <label> Description: &nbsp;&nbsp;
                    <input type="text" onChange={(e)=>this.handleInput('description',e)} />
                    </label>
                    &nbsp;&nbsp;
                    <label> Price: &nbsp;&nbsp;
                    <input type="text" onChange={(e)=>this.handleInput('price',e)} />
                    </label>
                    &nbsp;&nbsp;
                    <label> Availability: &nbsp;&nbsp;
                        <select value={this.state.newProduct.availability} onChange={(e)=>this.handleInput('availability',e)}>
                            <option value="0">Out of Stock</option>
                            <option value="1">Available</option>
                        </select>
                    </label>
                &nbsp;&nbsp;
                    <input type="submit" value="Submit" />
                </form>
            </div>
        )
    }
}

export default AddProduct;
