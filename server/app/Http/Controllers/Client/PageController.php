<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login () {
        return view ('admin.login');
    }
    public function register () {
        return view ('admin.register');
    }
    public function index () {
        return view ('client.pages.index');
    }

    public function gallery () {
        return view ('client.pages.gallery');
    }

    public function about () {
        return view ('client.pages.about');
    }

    public function contact () {
        return view ('client.pages.contact');
    }

    public function fare () {
        return view ('client.pages.fare');
    }

    public function playground () {
        return view ('client.pages.playground');
    }
}
