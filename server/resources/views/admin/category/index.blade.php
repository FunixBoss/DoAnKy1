@extends('admin.master')
@section('main_content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid index" style="display: flex; justify-content: space-between; ">

            {{-- Create Category --}}
            <div class="col-lg-7" style="padding: 100px 0; max-width: 50%;">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create a Category!</h1>
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
                    <form class="user" action="{{route('admin.category.store')}}" method="POST">
                        @csrf
                        <div class="form-group row" >
                            <input type="text" name="cate_name" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Category Name" value={{old('cate_name')}}>
                        </div>

                        <input type="submit" value="Create" class="btn btn-primary btn-user btn-block">
                    </form>
                    <hr>
                </div>
            </div>  

            <!-- DataTales Example -->
            
            <div class="card shadow mb-4" style="width: 50%;">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 p-4 text-gray-800">Category List</h1>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->cate_name}}</td>
                                        <td><a href="{{ Route('admin.category.edit', ['id' => $category->id]) }}">Edit</a></td>
                                        <td><a onclick="return confirmDelete()" href="{{ Route('admin.category.delete', ['id' => $category->id]) }}">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" align="center">No data</td>
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








