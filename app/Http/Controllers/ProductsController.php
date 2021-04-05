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
      $products = Products::all();
        //dd($products);
        return view('product.products',compact(['products']));
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
       // $products = DB::select('select * from products');

        return redirect()->route('product.products');
    }
    

    public function show($id)
    {
        $productDetails = Products::where('id', $id)->get();
        $productDetails = $productDetails[0];
        // dd($details);

        return view('product.productDetails',compact([
            'productDetails'
        ]));

      
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
