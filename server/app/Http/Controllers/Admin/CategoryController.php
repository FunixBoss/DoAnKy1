<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    public function index(){
        $result = DB::table('categories')->get();
        // echo dd($result);
        
        return view('admin.category.index', ['categories' => $result])->with('success', 'Insert successfully');
    }

    public function create(){
        return view('admin.category.index');
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');

        // image handling 
        
        DB::table('categories')->insert($data);

        return redirect()->route('admin.category.index');
    }

    public function edit($id){
        $category = DB::table('categories')->where('id', $id)->first();

        return view('admin.category.edit', ['id'=>$id, 'category' => $category])->with('success', 'Edit successfully');
    }

    public function update(UpdateRequest $request, $id){
        $data = $request->except('_token');
        DB::table('categories')->where('id', '=', $id)->update($data);


        return redirect()->route('admin.category.index');
    }

    public function delete($id){
        $result = DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin.category.index');
    }
}
