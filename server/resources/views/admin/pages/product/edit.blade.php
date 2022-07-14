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
                            <h1 class="h4 text-gray-900 mb-4">Edit Product Information</h1>
                        </div>
                        <form class="user" action="{{route('admin.product.update', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row" >
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="ticket_name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Product name" value={{$ticket->ticket_name}}>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="ticket_price" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Price" value={{$ticket->ticket_price}}>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="" name="ticket_price_special" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Category ID" value={{$ticket->ticket_price_special}}>
                            </div>
                            <div class="form-group">
                                <input type="" name="ticket_description" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="ticket_description" value={{$ticket->ticket_description}}>
                            </div>
                            <input type="submit" value="Edit Product Information" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection