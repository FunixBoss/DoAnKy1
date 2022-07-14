@extends('admin.master')
@section('main_content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Product List</h1>
            @if (Session::has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close"  data-dismiss="alert">x</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
            @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('admin.product.create')}}">
                        <h6 class="m-0 font-weight-bold text-primary">Add A Product</h6>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Price Special</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category_id</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->ticket_name}}</td>
                                        <td>{{$product->ticket_price}}</td>
                                        <td>{{$product->ticket_price_special}}</td>
                                        <td>
                                            {{$product->ticket_description}}
                                        </td>
                                        <td><a href="{{ Route('admin.product.edit', ['id' => $product->ticket_id]) }}">Edit</a></td>
                                        <td><a onclick="return confirmDelete()" href="{{ Route('admin.product.delete', ['id' => $product->ticket_id]) }}">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" align="center">No data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection








