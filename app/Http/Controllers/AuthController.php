<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   

    public function reisterform()
    {
        return view('Auth.register');
    }
    public function register(Request $request)
    {
        $data =$request->validate([
            'name'    =>'required|string',
            'phone'    =>'required',
            'salary'    =>'required',
            'rate'    =>'required',
            
            'clientsNumber'    =>'required',
            'email'   =>'required|email|unique:users,email',
            'password'=>'required|confirmed'
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['role_id'] = role::where('name' ,'admin')->first()->id;
        $uesr = User::create($data);
        // Auth::login($uesr);
        return redirect(url('/empolyee'));
    }
    public function loginform()
    {
        return view('Auth.login');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $isLogin = Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]);
        if(!$isLogin)
        {
            return redirect(url('login'));
        }        
        return redirect(url('home'));
    }
    public function logout()
    {
         Auth::logout();
         return redirect(url('login'));
    }
}
