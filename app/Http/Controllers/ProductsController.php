<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Requests\Products\CreateProductsRequest;

class ProductsController extends Controller
{

    public function index()
    {
      //  $products = DB::select('select * from products');
        return view('product.addproduct' );
    }

    public function create()
    {
        //
    }


    public function store(CreateProductsRequest $request)
    {
        $image = $request->file('image')->store('products');
       

        $product = Products::create([
            'p_name'=>$request->p_name,
            'p_desc'=>$request->p_desc,
            'image'=>$image
        ]);

        return redirect()->route('product.products');
    }
    

    public function show(Products $product)
    {
        
      
    }


    public function edit(Products $product)
    {
        //
    }


    public function update(Request $request, Products $product)
    {
        //
        
    }


    public function destroy(Products $product)
    {
        //
    }
}
