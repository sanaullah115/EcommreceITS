<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function Showregistr()
    {
        return view('register.create');
    }

    public function register(Request $request)
    {
        // $request->validate(User::$roles);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('Upload'),$imagename);
        $user->image = $imagename;
        // $user->password = Hash::make($request->password);        
        $user->password =($request->password);        

        $user->save();
        return back()->with('success', 'your registertion successfull.');
    }



    public function Showlogin()
    {
        return view('Login.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'required|String',
        ]);



        $userCredential = $request->only('email', 'password');
        if (Auth::attempt($userCredential)) {
            $route = $this->redirectDashboard();
            return redirect($route);
        } else {
            return back()->with('error', 'Email And Password is incorrect.');
        }
    }


    public function redirectDashboard()
    {
        $redurict = '';

        if (Auth::User() && Auth::User()->roleid_fk == 1) {
            $redurict = '/Admin/dashbaord';
        } else {
            $redurict = '/dashbaord';
        }
        return $redurict;
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
