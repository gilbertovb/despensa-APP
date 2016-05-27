<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index() {
        $units= Unit::where('user_id', Auth::user()->user_id)->orderBy('name', 'ASC')->get();
        return view('units.list')->with('units', $units);
    }
    function create() {
        return view('units.create');
    }
    public function store(Request $request)
    {
        $form = $request->all();
        $form['name'] = ucfirst($request->name);
        $valid = validator($form,[
            'name' => 'required|unique:units|max:255',
        ]);
        
        if($valid->fails()){
            return redirect('/units/create')->withErrors($valid)->withInput();
        }
        
        $unit = new Unit;
        $unit->name = $form['name'];
        $unit->user_id = Auth::user()->user_id;
        $unit->save();

        return Redirect::to('units');
    }
    function update($id, Request $request)
    {
        $form = $request->all();
        $form['name'] = ucfirst($request->name);
        $valid = validator($form,[
            'name' => 'required|unique:units|max:255',
        ]);
        
        if($valid->fails()){
            return redirect('/units/'.$id.'/edit')->withErrors($valid)->withInput();
        }
        $unit = Unit::find($id);
        $unit->name = $form['name'];
//        $unit->save();

        return Redirect::to('units');
    }
    
    function edit($id)
    {
        $unit = Unit::find($id);
        
        return view('units.edit')->with('unit', $unit);
    }
    function show($id) {
        $unit = Unit::find($id);
        $products = \App\Product::where('unit_id', $id)->get();
        
        return view('units.show')->with('unit', $unit)->with('products', $products);
    }
    function delete($id) {
        $unit = Unit::find($id);
        $unit->delete();

        return Redirect::to('units');        
    }
}
