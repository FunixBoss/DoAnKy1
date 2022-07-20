<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\comments;
use App\Models\Contact;


class PageController extends Controller
{

    public function index () {
        return view ('client.pages.index');
    }

    public function gallery () {
        $comments = comments::all();
        // dd($comments);
        return view ('client.pages.gallery',['comments' => $comments]);
    }
    public function comment (Request $request) {
        $comment = new comments();
        $comment->comment_content = $request->comment_content;
        $comment->user_id = $request->session()->get('user_id');
        $comment -> save();
        // dd( $comment);
        return redirect()->route('gallery');
    }
    public function about () {
        return view ('client.pages.about');
    }

    public function contact () {
        return view ('client.pages.contact');
    }
    public function postContact (Request $request) {
        $contact = new Contact();
        $contact->user_id = $request->session()->get('user_id');
        $contact->email = $request->get('email');
        $contact->contact_title = $request->get('contact_title');
        $contact->contact_content = $request->get('contact_content');
        $contact->save();
        return redirect()->route('index');
    }
    public function fare () {
        $tickets = DB::table('tickets')->get();
        return view ('client.pages.fare', ["tickets" => $tickets]);
    }

    public function playground () {
        return view ('client.pages.playground');
    }

    public function cart () {
        return view ('client.pages.cart');
    }
}
