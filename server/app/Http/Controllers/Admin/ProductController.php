<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\models\tickets;



class ProductController extends Controller
{
        public function index(){
            // dd('sad');
            $result = DB::table('tickets')->get();
            // echo dd($result);

            return view('admin.pages.product.index', ['products' => $result]);
        }

        public function create(){
            return view('admin.pages.product.create');
        }

        public function store(Request $request){
            $data = $request->except('_token');

            // image handling
            // $imageName = time().'.'.$request->image->extension();

            // $request->image->move(public_path('images/product'), $imageName);


            // $data['image'] = $imageName;
            DB::table('tickets')->insert($data);

            return redirect()->route('admin.product.index');
        }

        public function edit($id){
            $ticket = DB::table('tickets')->where('ticket_id', $id)->first();
            // dd($ticket->ticket_description);
            return view('admin.pages.product.edit', ['id'=>$id, 'ticket' => $ticket]);
        }
        public function update(Request $request, $id){
            $data = $request->except('_token');
            DB::table('tickets')->where('ticket_id', '=', $id)->update($data);

            // Reset Avatar
            // if(!empty($request->image)){
            //     $data_old = DB::table('products')->where('id', $id)->first();
            //     $url_file_old_path = public_path('assets/images/product/'.$data_old->image);
            //     // Xoa hinh cu
            //     if(file_exists($url_file_old_path)){
            //         unlink($url_file_old_path);
            //     }

            //     // Them hinh moi
            //     $imageName = time().'.'.$request->image->extension();
            //     $request->image->move(public_path('images/product/'), $imageName);
            //     $data['image'] = $imageName;
            // }

            return redirect()->route('admin.product.index');
        }
        public function delete($id){
            $result = DB::table('tickets')->where('ticket_id', '=', $id)->delete();
            return redirect()->route('admin.product.index');
        }
}
