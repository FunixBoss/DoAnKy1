<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\models\Users;

class CommentController extends Controller
{
    public function index(){
        // dd('sad');
        $result = DB::table('comments')->get();
        // echo dd($result);

        return view('admin.pages.comment.index', ['comments' => $result]);
    }
    public function delete($id){
        $result = DB::table('comments')->where('comment_id', '=', $id)->delete();
        return redirect()->route('admin.comment.index');
    }
}
