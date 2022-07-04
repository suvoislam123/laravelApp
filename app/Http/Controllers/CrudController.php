<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;

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
    public function store(ProductRequest $request){
        // dd(request()->all());
        // dd(request()->only('name'));
        // dd(request()->except('details'));
        // $request->validate([
        //     'name' => 'required|unique:products|max:15|min:3',
        //     'details' => 'min:6|max:100',
        // ]);//it is not needed whe we use custome request class
        Product::create([
            'name' => $request->name,
            'details' => $request->details,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);
        // We will use Session::flash('key','message') for notifying
        return redirect()->route('products.index');

    }
    public function show($productId){
        // $product = Product::where('id','=',$productId)->get();
        // $product = Product::where('id','=',$productId)->first();
        // $product = Product::find($productId);
        $product = Product::findOrFail($productId);
        // dd($product);
        return view('products.show',compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }
    public function update(Request $request,$productId){
        // dd($productId);
        // dd($request->all());
        $product = Product::findOrFail($productId);
        $name = $product->name;
        $rname=$request->name;
        $request->validate([
            'name' => ($name==$rname)?'required|max:15|min:3':'required|max:15|unique:products|min:3',
            'details' => 'min:3|max:100',
        ]);
        $product->update([
            'name'=>$request->name,
            'details'=>$request->details,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('products.index')->withMessage("successfully udated");
    }
    public function destroy($productId){
        $product = Product::findOrFail($productId);
        $product->delete();
        return redirect()->route('products.index')->withMessage("successfully Deleted");
    }
}
