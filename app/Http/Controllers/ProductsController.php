<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }
 
    public function show(Product $product)
    {
        return $product;
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            //'title' => 'required|unique:products|max:255',
            'title' => 'required|max:191',
            'description' => 'required',
            'price' => 'required|between:0,99.99',
            'availability' => 'boolean',
        ]);
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
 
    public function update(Request $request, Product $product)
    {
        // no validation so as to support PATCH and PULL
        $product->update($request->all()); 
        return response()->json($product, 200);
    }
 
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
