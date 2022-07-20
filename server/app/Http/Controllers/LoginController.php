<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
class LoginController extends Controller
{
    public function login(){
        return view('login');
        // return admin::all();
    }

    public function postLogin(Request $request){
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // dd('asd');
        if (Auth::attempt($login)) {
            $request->session()->put('user_id',Auth::user()->user_id);
            // dd($request->session()->all());
            if(Auth::User()->level ==1){
                return redirect()->route('admin.');
            }else{
                return redirect()->route('index');

            }
        } else {
            return redirect()->back()->with('error', 'Email hoặc Password không chính xác');
        }
        // return view('admin.login');
        // return admin::all();
    }
    public function register () {
        return view ('register');
    }
    public function postRegister (Request $request) {
        $obj = new Users;
        $obj->username = $request->username;
        $obj->fullname = $request->fullname;
        $obj->email = $request->email;
        $obj->password = bcrypt($request->password);
        $obj->save();
        return redirect()->route('login');
    }
    public function getLogout(Request $request)
    {
        $request->session()->forget('user_id');
        Auth::logout();
        return redirect()->route('login');
    }

}
