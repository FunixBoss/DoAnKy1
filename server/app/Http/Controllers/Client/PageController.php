<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Cart;


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
        $result = DB::table('tickets')->get();

            // ->select('tickets.*', 'day_ticket.day_id')
        return view('client.pages.fare', ["tickets"=>$result]);
    }

    public function playground () {
        return view ('client.pages.playground');
    }

    public function cart () {
        return view ('client.pages.cart');
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
