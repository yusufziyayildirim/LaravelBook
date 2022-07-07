<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('book.index');
        }
        return redirect()->route('login')->withErrors(('Email adresi veya şifre hatalı!'));
    }
    public function register()
    {
        return view('register');
    }
    public function logOut()
    {
        Auth::logout();
        return redirect()->route('book.index');
    }
    public function registerPost(Request $request)
    {
        // dd($request->post());
      
        // $validated = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

       
        $user = new User();
        $data = $this->prepare($request, $user->getFillable());
        $user->fill($data);
        $user->password = Hash::make($user->password);
        $user->save();
        return redirect()->route('book.index');
    
    }

}
