<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('products.index');
    }

    function create(){
        return view('products.create', Brand::all());
    }

    function show($id, $category = null){
    return view('products.show',);

    $brands = Brand::all();
    return view('products.show', compact('brands'));

    foreach ($brands as $brand) {
        echo $brand->name . '<br>';
    }

    function store (Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id',
        ]);


    $product = new Product();
    $product->name = $request->get('name');
    $product->description = $request->get('description');
    $product->price = $request->get('price');
    $product->category_id = $request->get('category');
    $product->brand_id = $request->get('brand');
    }

    dd($id, $category);
}
}

