<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        Auth::logout();
        return view('auth.login');

    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');
        //dd($credentials);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            //dd(Auth::user()->name);
            session()->flash('welcome', 'Welcome Again: ' . Auth::user()->name . '');
            return redirect()->intended('/home');
        } else {
            dd('failed');
        }

    }

    public function destroy(){

        Auth::logout();
        return redirect('/');
    
    }

    public function register(){

        return view('auth.register');

    }

    public function store(Request $request){

        dd($request->all());
        
    }
}
