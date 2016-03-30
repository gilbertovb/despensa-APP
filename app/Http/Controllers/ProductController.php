<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Unit;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index() {
        $products = Product::where('user_id', Auth::user()->user_id)->orderBy('name', 'ASC')->get();

        return view('products.list')->with('products', $products);
    }
    function create() {
        $units= Unit::where('user_id', Auth::user()->user_id)->orderBy('name','ASC')->get();
        return view('products.create')->with('units', $units);
    }
    function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->unit_id = $request->unit_id;
        $product->user_id = Auth::user()->user_id;
        $product->save();

        return Redirect::to('products');
    }
    function update($id, Request $request) {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->unit_id = $request->unit_id;
        $product->save();

        return Redirect::to('products');
    }
    function edit($id) {
        $product = Product::find($id);
        $units= Unit::where('user_id', Auth::user()->user_id)->orderBy('name','ASC')->get();
        
        return view('products.edit')->with('units', $units)->with('product', $product);
    }
    function show($id) {
        $product = Product::find($id);
        
        return view('products.show')->with('product', $product);
    }
    function delete($id) {
        $product = Product::find($id);
        $product->delete();

        return Redirect::to('products');        
    }
}
