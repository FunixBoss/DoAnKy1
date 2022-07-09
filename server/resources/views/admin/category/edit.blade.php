@extends('admin.master')

@section('main_content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image">

                </div>

                <div class="col-lg-7" style="padding: 100px 0;">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Category Information</h1>
                        </div>
                        <form class="user" action="{{route('admin.category.update', ['id' => $id])}}" method="POST">
                            @csrf
                            <div class="form-group row" >
                                <input type="text" name="cate_name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Username" value={{$category->cate_name}}>
                            </div>
                            <input type="submit" value="Edit Category Information" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection