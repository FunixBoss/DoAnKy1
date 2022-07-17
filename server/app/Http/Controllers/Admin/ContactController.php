<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\models\Users;

class ContactController extends Controller
{
    public function index(){
        // dd('sad');
        $result = DB::table('contact')->get();
        // echo dd($result);

        return view('admin.pages.contact.index', ['contacts' => $result]);
    }

    public function delete($id){
        $result = DB::table('contact')->where('contact_id', '=', $id)->delete();
        return redirect()->route('admin.contact.index');
    }
}

