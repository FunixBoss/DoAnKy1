<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function homeAction(){
    //     $result = DB::table('products')->get();

    //     return view('project/home', ['products' => $result]);
        
    // }
    // public function collectionAction(){
    //     $result = DB::table('products')->where('category_id', 1)->get();

    //     return view('project/collection', ['products' => $result]);
    // }
    // public function shoesAction(){
    //     $result = DB::table('products')->where('category_id', 0)->get();
    //     return view('project/shoes', ['products' => $result]);
    // }
    public function adminAction(){
        return view ('admin/index');
    }
    
}
