<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\models\customer;
use App\Http\Requests\Member\StoreRequest;
use App\Http\Requests\Member\UpdateRequest;


class MemberController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $result = DB::table('users')->orderBy('created_at', 'DESC')->get();
=======
        // $result = DB::table('customers')->orderBy('created_at', 'DESC')->get();
        $result=customer::orderBy('created_at','ASC')->get();
>>>>>>> 458a5d1bb58ea89d6bb09c0c763027f0a49369b0
        return view('admin.pages.member.index', ['members' => $result]);

    }

    public function create(){
        return view('admin.pages.member.create');
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();
<<<<<<< HEAD
        DB::table('users')->insert($data);

=======
        $obj = new customer();
        $obj -> fill($data);
        $obj->save();
        // DB::table('customers')->insert($data);
>>>>>>> 458a5d1bb58ea89d6bb09c0c763027f0a49369b0
        return redirect()->route('admin.member.index')->with('success', 'Insert successfully');
    }

    public function edit($id){
<<<<<<< HEAD
        $member = DB::table('users')->where('customer_id', $id)->first();
        $edit_myself=null;
        // dd(Auth::User());
        // if(Auth::user()->customer_id == $id){
        //     $edit_myself=true;
        // } else{
        //     $edit_myself = false;
        // }
        // dd('asd');
        // if(Auth::user()->customer_id != 1 && ($id == 1 || ($member->level == 1 && $edit_myself == false))){
        //     return "khong sua duoc";
        // }
=======
        $member = DB::table('customers')->where('customer_id', $id)->first();
        // $edit_myself=null;
        // dd($member->level); 
        if(Auth::user()->customer_id == $id){
            $edit_myself=true;
        } else{
            $edit_myself = false;
        }
        
>>>>>>> 458a5d1bb58ea89d6bb09c0c763027f0a49369b0
        return view('admin.pages.member.edit', ['id'=>$id, 'member' => $member])->with('success', 'Edit successfully');
    }

    public function update(UpdateRequest $request, $id){
        // Reset password
        // dd('asd');
        $data = $request->except('password', '_token');
        if(!empty($request->password)){
            $data['password'] = bcrypt($request->password);
        }
        customer::where('customer_id', $id)->update($data);
        // dd(customer::find($id)->update($data));
        
        
        return redirect()->route('admin.member.index')->with('success', 'Edit successfully');
    }
    
    public function delete($id){
        $result = DB::table('customers')->where('customer_id', '=', $id)->delete();
        return redirect()->route('admin.member.index');
    }
}
