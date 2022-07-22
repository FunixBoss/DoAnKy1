<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Cart;
use App\Models\comments;
use App\Models\Contact;
use Illuminate\Contracts\Session\Session;

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
        $result = DB::table('tickets')->get();

            // ->select('tickets.*', 'day_ticket.day_id')
        return view('client.pages.fare', ["tickets"=>$result]);
    }

    public function playground () {
        return view ('client.pages.playground');
    }

    public function policy () {
        
        return view ('client.pages.policy');
    }

    public function getDataForAjax ($days) {
        //$days[0] -> day on week (monday, sunday, ...)
        // $days[1] -> dd-mm
        $days = json_decode($days);

        $ticketWithSpecialDays = DB::table('tickets')
            ->join('day_ticket', 'tickets.ticket_id', '=', 'day_ticket.ticket_id')
            ->join('days', 'day_ticket.day_id', '=', 'days.day_id')
            ->select('tickets.*', 'days.day')
            ->get();
        $result = DB::table('tickets')->get();

        for($i = 0; $i < count($ticketWithSpecialDays); $i++){
            for($j = 0; $j < count($days); $j++){
                for($k = 0; $k < count($result); $k++){
                    if($ticketWithSpecialDays[$i]->day == $days[$j]){
                        $result[$k]->ticket_price = $result[$k]->ticket_price_special;
                    } 
                }
            }
        }

        return json_encode(["data"=>$result]);
    }
}
