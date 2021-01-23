<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registerView()
    {

        return view('user.create');
    }

    public function loginView()
    {

        return view('login.login');
    }

    public function login(Request $request)
    {

        $password = $request->password ;
        $username = $request->email;


        $user = User::where('email','=', $username)->get();
        if(isset($user[0])){
            $passwordInDb = $user[0]->password;
            if(Hash::check($password, $passwordInDb)) {
                Session::put('loggedInUser', $user[0]);
                return redirect(route('product.index'));
            } else {
                return redirect()->back()->with("error", "Password does not match.");
            }
        } else {
            return redirect()->back()->with("error", "User doesn't exist.");
        }


    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect(url('/'));
    }
}
