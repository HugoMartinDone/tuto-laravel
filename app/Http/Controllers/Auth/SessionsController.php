<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $success = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($success){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }


    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
