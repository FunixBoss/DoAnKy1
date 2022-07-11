@extends('admin.master')
@section('main_content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Member List</h1>
            @if (Session::has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close"  data-dismiss="alert">x</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
            @endif
            

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{route('admin.member.create')}}">
                        <h6 class="m-0 font-weight-bold text-primary">Add A Member</h6> 
                    </a>  
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th> 
                                </tr>
                            </thead>
                            
                            <tbody>
                                @forelse ($members as $member)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->fullname}}</td>
                                        
                                        <td>{{ date('h:i:s - d/m/y', strtotime($member->created_at))}}</td>
                                        <td>
                                            {{-- <a href="{{ Route('admin.member.edit', ['id' => $member->id]) }}">Edit</a> --}}
                                            edit
                                        </td>
                                        <td>
                                            {{-- <a onclick="return confirmDelete()" href="{{ Route('admin.member.delete', ['id' => $member->id]) }}">Delete</a> --}}
                                            
                                            delete
                                        </td>
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








