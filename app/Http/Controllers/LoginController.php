<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function auth(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){
            return redirect()->intended('welcome');
        }else{
            // $request->session()->flash('error','Data tidak ditemukan');
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('welcome');
    }
}
