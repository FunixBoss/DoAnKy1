<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{

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
        $tickets = DB::table('tickets')->get();
        return view ('client.pages.fare', ["tickets" => $tickets]);
    }

    public function playground () {
        return view ('client.pages.playground');
    }
}
