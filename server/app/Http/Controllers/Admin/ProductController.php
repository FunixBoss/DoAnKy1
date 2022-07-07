<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;




class ProductController extends Controller
{
    public function index(){
        $result = DB::table('products')->where('id', '>', 2)->where('id', '<', 7)->get();
        // echo dd($result);
        
        return view('admin.product.index', ['products' => $result]);
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(StoreRequest $request){
        $data = $request->except('_token');

        // image handling 
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/product'), $imageName);    

        
        $data['image'] = $imageName;
        DB::table('products')->insert($data);

        return redirect()->route('admin.product.index');
    }

    public function edit($id){
        $product = DB::table('products')->where('id', $id)->first();

        return view('admin.product.edit', ['id'=>$id, 'product' => $product]);
    }
    public function update(UpdateRequest $request, $id){
        $data = $request->except('_token');
        DB::table('products')->where('id', '=', $id)->update($data);

        // Reset Avatar
        if(!empty($request->image)){
            $data_old = DB::table('products')->where('id', $id)->first();
            $url_file_old_path = public_path('assets/images/product/'.$data_old->image);
            // Xoa hinh cu
            if(file_exists($url_file_old_path)){
                unlink($url_file_old_path);
            }

            // Them hinh moi
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/product/'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('products')->where('id', '=', $id)->update($data);

        return redirect()->route('admin.product.index');
    }
    public function delete($id){
        $result = DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('admin.product.index');
    }



    public function textAjax(){
        return view('admin.product.test-ajax');
    }
}
