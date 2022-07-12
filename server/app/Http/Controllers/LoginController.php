<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;   
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\customer;
class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
        // return admin::all();
    }

    public function postLogin(Request $request){
        $login = [
            'email' => $request->email,
            'password' => $request->password,   
        ];
        if (Auth::attempt($login)) {
            if(Auth::User()->level ==1){
                return redirect()->route('admin.member.index');
            }else{
                return redirect()->route('index');

            }
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
        // return view('admin.login');
        // return admin::all();
    }
    public function register () {
        return view ('admin.register');
    }
    public function postRegister (Request $request) {
        $obj = new customer;
        $obj->username = $request->username;
        $obj->fullname = $request->fullname;
        $obj->email = $request->email;
        $obj->password = bcrypt($request->password);
        $obj->save();
        return redirect()->route('login');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
