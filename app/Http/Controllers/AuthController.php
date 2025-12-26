<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loadregister() {
        return view('register');
    }
    public function saveuser(Request $request) {
        $isExists=User::where('email',$request->email)->first();
        if($isExists) {
            return redirect()->back()->with('error','Email already exists');
        }
        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password) 

        ]);
        return redirect()->back()->with('success','registration successfully');
    }
    public function loadlogin() {
        return view('login');
    }
    public function userlogin(Request $request) {
        $userCredential=$request->only('email','password');
        if(Auth::attempt($userCredential)){
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error','username & password are incorrect');
    }
    public function dashboard() {
        return view('dashboard');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('loadlogin');
    }
}
