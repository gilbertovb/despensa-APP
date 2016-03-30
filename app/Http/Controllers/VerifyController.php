<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Mail;

class VerifyController extends Controller
{
    function confirm($confirmation_code) {
        if(!$confirmation_code){
            return view('verify.error');
        }
        $user = User::where('confirmation_code', $confirmation_code)->first();
        
        if (!$user){
            return view('verify.error');
        }

        $user->confirmed = true;
        $user->confirmation_code = null;
        $user->save();
        
        Mail::send('mail.success',['user', $user], function($message) use($user){
            $message->to($user['email'], $user['name'])->subject('Conta ativa');
        });

            return view('verify.success')->with('email', $user->email);
    }
    function migration_install($id) {
//        $migrate = Artisan::call('migrate', array('--path' => 'app/migrations'));
        $migrate = Artisan::call($id);
        
        return $migrate;
    }
}
