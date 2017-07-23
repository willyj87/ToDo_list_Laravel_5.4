<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }
    public function register()
    {
        return view('Auth/register');
    }
    public function store()
    {
        $this->validate(request(),
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed'
            ]);
        $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=> Hash::make(request('password'))
        ]);
        auth()->login($user);
        return redirect()->home();
    }
    public function login()
    {
        return view('Auth/login');
    }
    public function connect()
    {
        if (!auth()->attempt(request(['email','password'])))
        {
            return back()->withErrors([
                'message'=>'Please check your credentials and try again'
            ]);
        }
        return redirect()->home();
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
