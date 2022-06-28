<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CrudController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd($products);
        return view('products.index',[
            'products' => $products
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(){
        dd('data asce');
    }
}
