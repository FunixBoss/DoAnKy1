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
                            <h1 class="h4 text-gray-900 mb-4">Add A Product</h1>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul> 
                            </div>
                        @endif
                        <form class="user" action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Product Name" value={{old('name')}}>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="price" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Price" value={{old('price')}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" name="category_id" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Category ID" value={{old('category_id')}}>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <input type="submit" value="Create" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection