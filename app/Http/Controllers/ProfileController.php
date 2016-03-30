<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;
use DateTime;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        if ($user->birth<>NULL){
            $birth = DateTime::createFromFormat('Y-m-d', $user->birth);
            $user->birth = $birth->format('d/m/Y');
        }
        return view('auth.profile')->with("user", $user);
    }
    
    function update(Request $request) {
        $valid = validator($request->all(),[
            'name' => 'required|max:255',
            'birth' => 'required|date_format:"d/m/Y"',
            'password' => 'confirmed|min:6',
        ]);
        
        if($valid->fails())
            return view('auth.profile')->withErrors($valid)->with('user', $request);
        
        $user = User::find(Auth::user()->user_id);
        $user->name = $request->name;
        if ($request->birth<>NULL){
            $birthdate = DateTime::createFromFormat('d/m/Y', $request->birth);
            $user->birth = $birthdate->format('Y-m-d');
        }
        $user->sex = $request->sex;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        if($request->password<>'')
            $user->password = bcrypt($request->password);
        
        $user->save();

        return Redirect::to('profile')->with('message', 'Perfil atualizado com sucesso.');
    }
}
