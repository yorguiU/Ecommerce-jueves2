<?php

namespace App\Http\Controllers;
use App\Models\Brand;

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

    dd($id, $category);
}
}

