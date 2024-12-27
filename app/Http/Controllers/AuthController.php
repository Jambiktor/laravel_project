<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $credentials = $request->only("email", "password");

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            $email = $user->email;
            return redirect()->intended(route("home",  ['email' => $email]));
        }
        return redirect(route("login"))->with( "error", " Failed to login");
    }

    public function register()
    {
        return view("auth.register");
    }

    function registerPost(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save())
        {
            return redirect( route("login"))->with("success", " User created successfully");
        }
        return redirect(route("register"))->with( "error", " Failed to create");
    }

 
}