<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Artisan;

class ConsumeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    function index() {
        $stock = Stock::where('user_id', Auth::user()->user_id)->where('current', '>', 0)->get();

        return view('consume.list')->with('stock', $stock);
    }
    function update($id, Request $request) {
        $stock = Stock::find($id);
        
        $valid = validator($request->all(),[
            'consume' => 'required|numeric|min:0|max:'.$stock->current,
        ]);
        
        if($valid->fails())
            return Redirect::to('/consume/'.$id.'/edit')->withErrors($valid)->withInput();
        
        $stock->current = $stock->current - $request->consume;
        $stock->save();

        return Redirect::to('consume');
    }
    function edit($id) {
        $stock = Stock::find($id);
        
        return view('consume.edit')->with('stock', $stock);
    }
}
