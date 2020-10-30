<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function login(){
            return view('login');
    }

    public function checkloginstatus(){
        return Auth::check();
    }

    public function authenticate(Request $request){
        $this->validate(request(),[
            'name' => 'required|min:5|max:20',
            'password' => 'required|min:8'
        ]);

        $loginCred = request(['name','password']);

        if(Auth::attempt($loginCred)){
             return redirect()->intended('/');
        } else{
            return redirect('login');
        }

    }

    public function showregistration(){
        return view('register');
    }

    public function register(Request $request){
        $this->validate(request(),[
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create(request(['name','email','password']));

        Auth::login($user);

        if($this->checkloginstatus()){
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        
        return redirect('/');
    }
}
