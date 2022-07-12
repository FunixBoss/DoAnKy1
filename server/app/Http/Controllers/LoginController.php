<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class LoginController extends Controller
{
    public function login(){
        return view('admin.login');
        // return admin::all();
    }
}
