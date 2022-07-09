<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Member\StoreRequest;
use App\Http\Requests\Member\UpdateRequest;


class MemberController extends Controller
{
    public function index(){
        $result = DB::table('members')->orderBy('created_at', 'DESC')->get();
        return view('admin.member.index', ['members' => $result]);

    }

    public function create(){
        return view('admin.member.create');
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = new \DateTime();

        DB::table('members')->insert($data);

        return redirect()->route('admin.member.index')->with('success', 'Insert successfully');
    }

    public function edit($id){
        $member = DB::table('members')->where('id', $id)->first( );
        $edit_myself=null;
        if(AUth::user()->id == $id){
            $edit_myself=true;
        } else{
            $edit_myself = false;
        }
        

        if(Auth::user()->id != 1 && ($id == 1 || ($member->level == 1 && $edit_myself == false))){
            return "khong sua duoc";
        }
        return view('admin.member.edit', ['id'=>$id, 'member' => $member])->with('success', 'Edit successfully');
    }

    public function update(UpdateRequest $request, $id){
        // Reset password
        $data = $request->except('password', '_token');
        if(!empty($request->password)){
            $data['password'] = bcrypt($request->password);
        }
    
        DB::table('members')->where('id', '=', $id)->update($data);
        return redirect()->route('admin.member.index')->with('success', 'Edit successfully');
        
    }
    
    public function delete($id){
        $result = DB::table('members')->where('id', '=', $id)->delete();
        return redirect()->route('admin.member.index');
    }
}
