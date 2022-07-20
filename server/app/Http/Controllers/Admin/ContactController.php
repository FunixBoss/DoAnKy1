<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $result = Contact::all();
        return view('admin.pages.contact.index', ['contacts' => $result]);
    }
    public function postContact(Request $request){


    }
    public function delete($id){
        $result = DB::table('contact')->where('contact_id', '=', $id)->delete();
        return redirect()->route('admin.contact.index');
    }
}

