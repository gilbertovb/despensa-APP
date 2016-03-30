<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BuyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index() {
        $stock = Stock::where('user_id', Auth::user()->user_id)->whereRaw('min > current')->get();

        return view('buy.list')->with('stock', $stock);
    }
    function update($id, Request $request) {
        
        $valid = validator($request->all(),[
            'buy' => 'required|numeric|min:0',
        ]);
        
        if($valid->fails())
            return Redirect::to('/buy/'.$id.'/edit')->withErrors($valid)->withInput();

        $stock = Stock::find($id);
        $stock->current = $stock->current + $request->buy;
        $stock->save();

        return Redirect::to('buy');
    }
    function edit($id) {
        $stock = Stock::find($id);
        
        return view('buy.edit')->with('stock', $stock);
    }
}
