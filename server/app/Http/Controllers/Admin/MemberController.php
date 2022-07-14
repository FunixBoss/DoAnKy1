<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\models\Users;
use App\Http\Requests\Member\StoreRequest;
use App\Http\Requests\Member\UpdateRequest;


class MemberController extends Controller
{
    public function index(){
        // $result = DB::table('customers')->orderBy('created_at', 'DESC')->get();
        $result=Users::orderBy('created_at','ASC')->get();
        return view('admin.pages.member.index', ['members' => $result]);

    }

    public function create(){
        return view('admin.pages.member.create');
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();
        $obj = new Users();
        $obj -> fill($data);
        $obj->save();
        // DB::table('customers')->insert($data);
        return redirect()->route('admin.member.index')->with('success', 'Insert successfully');
    }

    public function edit($id){
        $member = DB::table('users')->where('user_id', $id)->first();
        // $edit_myself=null;
        // dd($member->level); 
        if(Auth::user()->customer_id == $id){
            $edit_myself=true;
        } else{
            $edit_myself = false;
        }
        
        return view('admin.pages.member.edit', ['id'=>$id, 'member' => $member])->with('success', 'Edit successfully');
    }

    public function update(UpdateRequest $request, $id){
        // Reset password
        // dd('asd');
        $data = $request->except('password', '_token');
        if(!empty($request->password)){
            $data['password'] = bcrypt($request->password);
        }
        Users::where('customer_id', $id)->update($data);
        // dd(customer::find($id)->update($data));
        
        
        return redirect()->route('admin.member.index')->with('success', 'Edit successfully');
    }
    
    public function delete($id){
        $result = DB::table('users')->where('user_id', '=', $id)->delete();
        return redirect()->route('admin.member.index');
    }
}