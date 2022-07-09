<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function event () {
        return view ('client.pages.event');
    }

    public function event_single () {
        return view ('client.pages.event_single');
    }
}
